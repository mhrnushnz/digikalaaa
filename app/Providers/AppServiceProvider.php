<?php
namespace App\Providers;
use App\Repositories\admin\AdminCategoryRepository;
use App\Repositories\admin\AdminCategoryRepositoryInterface;
use App\Repositories\admin\AdminDeliveryRepository;
use App\Repositories\admin\AdminDeliveryRepositoryInterface;
use App\Repositories\admin\AdminPaymentRepository;
use App\Repositories\admin\AdminPaymentRepositoryInterface;
use App\Repositories\admin\ProductRepository;
use App\Repositories\admin\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     */
    public function register(): void{
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(AdminCategoryRepositoryInterface::class, AdminCategoryRepository::class);
        $this->app->bind(AdminDeliveryRepositoryInterface::class, AdminDeliveryRepository::class);
        $this->app->bind(AdminPaymentRepositoryInterface::class, AdminPaymentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void{
        //
    }
}
