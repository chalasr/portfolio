default_run_options[:pty] = true
set :use_sudo, true
set :application, "Portfolio"
set :domain,      "dev.chalasdev.fr"
set :deploy_to,   "/var/www/html/projects/Portfolio"
set :app_path,    "app"
set :repository,  "https://chalas_r:03050712@bitbucket.org/chalas_r/portfolio.git"
set :scm,         :git
set :model_manager, "doctrine"

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set  :keep_releases,  3

set :writable_dirs,       ["app/cache", "app/logs"]
set :user, "chalas_r"
set :permission_method,   :chown
set :use_set_permissions, true
task :upload_parameters do
  origin_file = "app/config/parameters.yml"
  destination_file = latest_release + "/app/config/parameters.yml" # Notice the latest_release

  try_sudo "mkdir -p #{File.dirname(destination_file)}"
  top.upload(origin_file, destination_file)
end

after "deploy:share_childs", "upload_parameters"
before "symfony:cache:warmup", "symfony:doctrine:schema:update"
