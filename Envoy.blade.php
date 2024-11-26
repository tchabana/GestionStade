{{-- @servers(['localhost' => '127.0.0.1'])

@task('deploy', ['on' => 'localhost'])
    echo "Starting deployment..."
    npm install
    npm run dev & # Exécute npm run dev en arrière-plan
    php artisan migrate --force
    php artisan serve
    echo "Deployment completed!"
@endtask --}}
