<?php

namespace Database\Factories;

use App\Models\Vacancy;
use App\Support\Helper;
use Closure;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $body = '<p>Сеть Супермаркетов объявляет набор на позицию «Администратор Супермаркета»</p>'
            . '<p><strong>Условия:</strong></p>'
            . '<ul><li>График работы: сменный;<br></li><li>Заработная плата: хороший оклад + надбавки;<br></li><li>Обучение за счет компании;<br></li><li>Льготное питание;<br></li><li>Главное - перспектива профессионального и карьерного роста.</li></ul>'
            . '<p>Количество Вакантных Мест Ограничено!;</p>'
            . '<p><strong>Требования:</strong></p>'
            . '<ul><li>Опыт работы в сфере продаж от 2 лет;<br></li><li>Опыт работы на аналогичной должности ;приветствуется;<br></li><li>Активность;<br></li><li>Коммуникабельность;<br></li><li>Грамотная речь и доброжелательность;<br></li><li>Дисциплинированность и Ответственность;<br></li><li>Умение управлять персоналом;<br></li><li>Образование не ниже среднего;<br></li><li>Наличие медицинской книжки;</li></ul>'
            . '<p><strong>Объязанности:</strong></p>'
            . '<ul><li>Организация эффективной работы супермаркета;<br></li><li>Контроль соблюдения стандартов обслуживания;<br></li><li>Обучение, координация и контроль деятельности персонала супермаркета;<br></li><li>Работа с покупателями: консультирование, работа с отзывами и претензиями;<br></li><li>Контроль порядка торгового зала и прилегающей территории;<br></li><li>Контроль приемки и учета товара в магазине;<br></li><li>Проведение инвентаризаций;<br></li><li>Мониторинг ценообразования;<br></li><li>Работа с поставщиками;<br></li><li>Ведение отчетности;<br></li><li>Обеспечение сохранности товарно-материальных ценностей магазина;<br></li></ul>';

        return [
            'name' => fake()->jobTitle(),
            'salary' => fake()->numberBetween(1000, 5000) . ' сомони',
            'slug' => rand(1, 1000),
            'body' => $body,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Vacancy $vacancy) {
            $vacancy->slug = Helper::generateSlug($vacancy->name);
            $vacancy->save();
        });
    }
}
