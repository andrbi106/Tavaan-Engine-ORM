<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\ORM\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Database\ORM\Model;
use Tavaan\Engine\Database\ORM\ModelServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور Model.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class ModelTest extends TestCase
{
    private Model $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new Model($config);
    }

    /**
     * T-01: CRUD کامل با fillable
     */
    public function test_t01_crud___fillable(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: Mass Assignment: فیلد guarded → رد
     */
    public function test_t02_mass_assignment__guarded(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: هر ۱۱ نوع رابطه
     */
    public function test_t03____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: Eager vs Lazy: شمارش کوئری (N+1 رفع شده)
     */
    public function test_t04_eager_vs_lazy___n1_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: Cast: money، enum، datetime، encrypted، json
     */
    public function test_t05_cast_money_enum_datetime_encry(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: Accessor/Mutator
     */
    public function test_t06_accessor_mutator(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: Soft Delete + `withTrashed`
     */
    public function test_t07_soft_delete__with_trashed(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: Global Scope (Tenant)
     */
    public function test_t08_global_scope_tenant(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: Observer: همهٔ رویدادها
     */
    public function test_t09_observer__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-10: `dispatchesEvents` → Domain Event
     */
    public function test_t10_dispatches_events__domain_event(): void
    {
        // TODO: پیاده‌سازی سناریوی T-10 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-10 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-11: Repository pattern (بدون extends Model)
     */
    public function test_t11_repository_pattern__extend(): void
    {
        // TODO: پیاده‌سازی سناریوی T-11 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-11 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-12: `hidden` در `toJson()`
     */
    public function test_t12_hidden__to_json(): void
    {
        // TODO: پیاده‌سازی سناریوی T-12 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-12 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-13: `updateOrCreate`/`firstOrCreate`
     */
    public function test_t13_update_or_createfirst_or_create(): void
    {
        // TODO: پیاده‌سازی سناریوی T-13 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-13 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-14: Hydration ۱۰۰۰ رکورد ≤ ۲۵ms
     */
    public function test_t14_hydration____ms(): void
    {
        // TODO: پیاده‌سازی سناریوی T-14 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-14 هنوز پیاده‌سازی نشده است.');
    }

}