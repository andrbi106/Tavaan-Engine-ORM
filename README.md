# Tavaan Engine — ORM

> **نگاشت شیء-رابطه** — موتور ORM در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.orm` |
| نام | `ORM` |
| عنوان فارسی | نگاشت شیء-رابطه |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Database\ORM` |
| نوع | `engine` |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Database\ORM\Contracts\CastInterface`
- `Tavaan\Engine\Database\ORM\Contracts\ModelInterface`
- `Tavaan\Engine\Database\ORM\Contracts\ObserverInterface`
- `Tavaan\Engine\Database\ORM\Contracts\RepositoryInterface`
- `Tavaan\Engine\Database\ORM\Contracts\ScopeInterface`

## کلاس‌های اصلی

- `src/Collection.php`
- `src/Model.php`
- `src/ORMServiceProvider.php`
- `src/Repository.php`

## Service Providerها

- `Tavaan\Engine\Database\ORM\ORMServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `database`
- `event`

## پیکربندی

- فایل پیکربندی: `config/orm.php`
- کلید: `orm`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-ORM.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-ORM`** (این مخزن) | موتور ORM |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
