# Remote
set :application, "Portfolio"
set :ssh_user, "chalas_r"
set :format, :pretty
set :log_level, :debug
set :stage, "production"
role :app, "chalas_r@dev.chalasdev.fr", :primary => true
set :deploy_to,   "/var/www/html/projects/Portfolio"
server 'dev.chalasdev.fr', roles: %w{web}, user: 'chalas_r'
set :scm, :git
set :repo_url,  "https://chalas_r:03050712@bitbucket.org/chalas_r/portfolio.git"
set :branch, "master"
set :model_manager, "doctrine"
set :composer_install_flags, '--no-dev --prefer-dist --no-interaction --optimize-autoloader'
set :pty, true

# Symfony environment
set :symfony_env, "prod"
set :app_path, "app"
set :web_path, "web"
set :log_path, fetch(:app_path) + "/logs"
set :cache_path, fetch(:app_path) + "/cache"
set :app_config_path, fetch(:app_path) + "/config"
set :use_sudo, true

set :linked_files, %w{app/config/parameters.yml}
set :linked_dirs, %w{app/logs web/uploads}
set :keep_releases, 3

# Permissions
set :file_permissions_paths, [fetch(:log_path), fetch(:cache_path)]
set :file_permissions_users, ['www-data']
set :webserver_user, "www-data"
set :permission_method, :chown

# Assets
set :assets_install_path, fetch(:web_path)
set :assets_install_flags, '--symlink'

# # Symfony console path
# set :symfony_console_path, fetch(:app_path) + "/console"
#
# # Symfony console flags
# set :symfony_console_flags, "--no-debug"

# Controllers to clear
# set :controllers_to_clear, ["app_*.php"]
after 'deploy:finishing', 'deploy:cleanup'
