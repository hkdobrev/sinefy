set :application, "set your application name here"
set :repository,  "set your repository location here"

set :scm, :subversion
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

role :web, "your web-server here"                          # Your HTTP server, Apache/etc
role :app, "your app-server here"                          # This may be the same as your `Web` server
role :db,  "your primary db-server here", :primary => true # This is where Rails migrations will run
role :db,  "your slave db-server here"

require 'capistrano/ext/multistage'
set :application, "sinefy"
set :repository,  "git@github.com:/hkdobrev/Sinefy.git"

set :scm, :git
set :use_sudo, false
# set :git_enable_submodules, 1

set :default_stage, 'staging'
set :deploy_via, :remote_cache
default_run_options[:pty] = true

depend :local, :command, "git"
depend :local, :command, "php"

#CHECK FOR PHP EXTENSIONS
depend :remote, :command, 'php'
depend :remote, :match, "php -m", "curl"
depend :remote, :match, "php -m", "xml"
depend :remote, :match, "php -m", "iconv"
depend :remote, :match, "php -m", "memcache"


namespace(:deploy) do

	# desc <<-DESC
	# 	Overriding original task to exclude restart
	# DESC
	# task :default do
	# 	update
	# end

	task :restart do
		run "KOHANA_ENV=#{stage} /etc/init.d/facebook restart"
		run "KOHANA_ENV=#{stage} /etc/init.d/process_image restart"
	end

	desc <<-DESC
		Run the "index.php db/migrate" task, -s version=<version> for version
	DESC
	task :migrate do
		if defined?(version)
			run "cd #{latest_release} && KOHANA_ENV=#{stage} php kohana db:migrate --version=#{version}"
		else
			run "cd #{latest_release} && KOHANA_ENV=#{stage} php kohana db:migrate"
		end
	end
	
	desc <<-DESC
		Finalize Things for Kohana
	DESC
	task :finalize_update, :except => { :no_release => true } do
		run "cd #{latest_release} && KOHANA_ENV=#{stage} #{latest_release}/build/deploy.sh #{shared_path} #{latest_release}"

		if fetch(:normalize_asset_timestamps, true)
			stamp = Time.now.utc.strftime("%Y%m%d%H%M.%S")
			asset_paths = %w(assets).map { |p| "#{latest_release}/web/#{p}" }.join(" ")
			run "find #{asset_paths} -exec touch -t #{stamp} {} ';'; true", :env => { "TZ" => "UTC" }
		end
	end
	
	# namespace :rollback do
	#   task :cleanup do
	#     # do nothing
	#   end
	# end
	
	namespace :web do
		desc <<-DESC
			Present a maintenance page to visitors. Disables your application's web \
			interface by writing a "maintenance.html" file to each web server. The \
			servers must be configured to detect the presence of this file, and if \
			it is present, always display it instead of performing the request.

			By default, the maintenance page will just say the site is down for \
			"maintenance", and will be back "shortly", but you can customize the \
			page by specifying the REASON and UNTIL environment variables:

				$ cap deploy:web:disable \\
							REASON="hardware upgrade" \\
							UNTIL="12pm Central Time"

			Further customization will require that you write your own task.
		DESC
		task :disable, :roles => :web, :except => { :no_release => true } do
			require 'erb'
			on_rollback { run "rm #{shared_path}/system/maintenance.html" }

			reason = ENV['REASON']
			deadline = ENV['UNTIL']

			template = File.read(File.join(File.dirname(__FILE__), "templates", "maintenance.rhtml"))
			result = ERB.new(template).result(binding)

			put result, "#{shared_path}/system/maintenance.html", :mode => 0644
		end
 
	end
end
