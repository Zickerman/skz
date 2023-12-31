<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->delete();

        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Томатный»',
            'description' => 'Состав: томаты свежие, соль пищевая поваренная
                              Пищевая ценность: в 100г консервов: Углеводы- 4,2г.
                              Энергетическая ценность/ калорийность: 84кДж/ 20ккал',
            'price' => 255,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Томатный»',
            'description' => 'Состав: томаты свежие, соль пищевая поваренная
                              Пищевая ценность: в 100г консервов: Углеводы- 4,2г.
                              Энергетическая ценность/ калорийность: 84кДж/ 20ккал',
            'price' => 130,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Грушевый»',
            'description' => 'Состав: вода питьевая, сок грушевый концентрированный
                              Пищевая ценность: в 100г консервов: Углеводы- 11,2г
                              Энергетическая ценность/ калорийность: 188кДж/45ккал',
            'price' => 90,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблоко» осветленный',
            'description' => 'Состав: вода питьевая, сок яблочный концентрированный
                              Пищевая ценность: в 100г консервов: Углеводы- 11,2г
                              Энергетическая ценность/ калорийность: 188кДж/45ккал',
            'price' => 100,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочный» с мякотью',
            'description' => 'Состав: яблоки свежие, сахар
                              Пищевая ценность:в 100г консервов: Углеводы- 10,0г.
                              Энергетическая ценность/ калорийность: 167кДж/40ккал',
            'price' => 315,
            'available' => 1,
            'amount' => 1000,
            'volume' => 3,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочный» с мякотью',
            'description' => 'Состав: яблоки свежие, сахар
                              Пищевая ценность:в 100г консервов: Углеводы- 10,0г.
                              Энергетическая ценность/ калорийность: 167кДж/40ккал',
            'price' => 255,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочный» с мякотью',
            'description' => 'Состав: яблоки свежие, сахар
                              Пищевая ценность:в 100г консервов: Углеводы- 10,0г.
                              Энергетическая ценность/ калорийность: 167кДж/40ккал',
            'price' => 105,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.85,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочный» с мякотью',
            'description' => 'Состав: яблоки свежие, сахар
                              Пищевая ценность:в 100г консервов: Углеводы- 10,0г.
                              Энергетическая ценность/ калорийность: 167кДж/40ккал',
            'price' => 105,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочно-персиковый»',
            'description' => 'Состав: яблоки свежие, персиковое концентрированное пюре, сахар.
                              Пищевая ценность: в 100г консервов: Углеводы- 12,0г.
                              Энергетическая ценность/ калорийность: 201кДж/48ккал',
            'price' => 290,
            'available' => 1,
            'amount' => 1000,
            'volume' => 3,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочно-персиковый»',
            'description' => 'Состав: яблоки свежие, персиковое концентрированное пюре, сахар.
                              Пищевая ценность: в 100г консервов: Углеводы- 12,0г.
                              Энергетическая ценность/ калорийность: 201кДж/48ккал',
            'price' => 220,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочно-персиковый»',
            'description' => 'Состав: яблоки свежие, персиковое концентрированное пюре, сахар.
                              Пищевая ценность: в 100г консервов: Углеводы- 12,0г.
                              Энергетическая ценность/ калорийность: 201кДж/48ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочно-абрикосовый»',
            'description' => 'Состав: яблоки свежие, пюре абрикосовое, Сахар.
                              Пищевая ценность: в 100г консервов: Углеводы- 10,0г.
                              Энергетическая ценность/ калорийность: 167кДж/40ккал',
            'price' => 220,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочно-абрикосовый»',
            'description' => 'Состав: яблоки свежие, пюре абрикосовое, Сахар.
                              Пищевая ценность: в 100г консервов: Углеводы- 10,0г.
                              Энергетическая ценность/ калорийность: 167кДж/40ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенный»',
            'description' => 'Состав: тыква продовольственная свежая, вода питьевая,  сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 5,0г.
                              Энергетическая ценность/ калорийность: 117кДж/28ккал',
            'price' => 315,
            'available' => 1,
            'amount' => 1000,
            'volume' => 3,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенный»',
            'description' => 'Состав: тыква продовольственная свежая, вода питьевая,  сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 5,0г.
                              Энергетическая ценность/ калорийность: 117кДж/28ккал',
            'price' => 255,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенный»',
            'description' => 'Состав: тыква продовольственная свежая, вода питьевая,  сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 5,0г.
                              Энергетическая ценность/ калорийность: 117кДж/28ккал',
            'price' => 110,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенно-яблочный»',
            'description' => 'Состав: вода питьевая, пюре тыквенное свежеизготовленное, пюре яблочное свежеизготовленное, сахар.
                              Пищевая ценность: в 100г консервов: Углеводы- 7,0г.
                              Энергетическая ценность/ калорийность: 117кДж/28ккал',
            'price' => 290,
            'available' => 1,
            'amount' => 1000,
            'volume' => 3,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенно-яблочный»',
            'description' => 'Состав: вода питьевая, пюре тыквенное свежеизготовленное, пюре яблочное свежеизготовленное, сахар.
                              Пищевая ценность: в 100г консервов: Углеводы- 7,0г.
                              Энергетическая ценность/ калорийность: 117кДж/28ккал',
            'price' => 220,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенно-яблочный»',
            'description' => 'Состав: вода питьевая, пюре тыквенное свежеизготовленное, пюре яблочное свежеизготовленное, сахар.
                              Пищевая ценность: в 100г консервов: Углеводы- 7,0г.
                              Энергетическая ценность/ калорийность: 117кДж/28ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенно-персиковый»',
            'description' => 'Состав: тыква продовольственная свежая, персиковое концентрированное пюре, вода питьевая, сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 6,5г.
                              Энергетическая ценность/ калорийность: 109кДж/ 26ккал',
            'price' => 290,
            'available' => 1,
            'amount' => 1000,
            'volume' => 3,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенно-персиковый»',
            'description' => 'Состав: тыква продовольственная свежая, персиковое концентрированное пюре, вода питьевая, сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 6,5г.
                              Энергетическая ценность/ калорийность: 109кДж/ 26ккал',
            'price' => 220,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенно-персиковый»',
            'description' => 'Состав: тыква продовольственная свежая, персиковое концентрированное пюре, вода питьевая, сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 6,5г.
                              Энергетическая ценность/ калорийность: 109кДж/ 26ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенно-персиковый»',
            'description' => 'Состав: тыква продовольственная свежая, персиковое концентрированное пюре, вода питьевая, сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 6,5г.
                              Энергетическая ценность/ калорийность: 109кДж/ 26ккал',
            'price' => 72,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Тыквенно-морковный»',
            'description' => 'Состав: тыква продовольственная свежая, морковь столовая свежая, вода питьевая, сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 6,5г.
                              Энергетическая ценность/ калорийность: 109кДж/26ккал',
            'price' => 220,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Сок «Морковно-яблочный»',
            'description' => 'Состав: Морковь столовая свежая, яблоки свежие, вода питьевая,  сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 7,7г
                              Энергетическая ценность/ калорийность: 130кДж/31ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочно-сливовый»',
            'description' => 'Состав: яблоки свежие, пюре сливовое, сахар
                              Пищевая ценность: в 100г консервов: Углеводы- 10,0г.
                              Энергетическая ценность/ калорийность: 167кДж/40ккал',
            'price' => 220,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Сливовый»',
            'description' => 'Состав: пюре сливовое, вода питьевая, сахар-песок
                              Пищевая ценность: в 100г консервов: Углеводы- 10,0г,Витамины РР-0,2 мг, С-5 мг.
                              Энергетическая ценность/ калорийность: 170кДж/40ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблоко-лимон»',
            'description' => 'Состав: яблоки свежие, пюре лимонное, сахар
                              Пищевая ценность: в 100г консервов: Углеводы- 10,0г.
                              Энергетическая ценность/ калорийность: 167кДж/40ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Нектар «Морковный»',
            'description' => 'Состав: морковь свежая столовая, вода питьевая, сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 8,2г
                              Энергетическая ценность/ калорийность: 138кДж/33ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Нектар «Тыквенно-морковно-яблочный»',
            'description' => 'Состав: тыква продовольственная свежая, морковь свежая столовая, яблоки свежие, вода питьевая, сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 8,0г
                              Энергетическая ценность/ калорийность: 138кДж/33ккал',
            'price' => 220,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 5,
            'name' => 'Нектар «Тыквенно-морковно-яблочный»',
            'description' => 'Состав: тыква продовольственная свежая, морковь свежая столовая, яблоки свежие, вода питьевая, сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 8,0г
                              Энергетическая ценность/ калорийность: 138кДж/33ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Абрикосовый с мякотью»',
            'description' => 'Состав: абрикосовое концентрированное пюре, сахар-песок, лимонная кислота, вода
                              Пищевая ценность: в 100г консервов: Углеводы- 12,0г
                              Энергетическая ценность/ калорийность: 201кДж/48ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Сок «Яблочно-клюквенный»',
            'description' => 'Состав: яблоки свежие, клюква быстрозамороженная, вода питьевая. сахар, регулятор кислотности -лимонная кислота.
                              Пищевая ценность: в 100г консервов: Углеводы- 10,0г
                              Энергетическая ценность/ калорийность:167кДж/40ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.75,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Напиток «Лимпопо»',
            'description' => 'Состав: яблоки свежие, клюква быстрозамороженная, вода питьевая. сахар, регулятор кислотности -лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 10,0г
                              Энергетическая ценность/ калорийность: 167кДж/40ккал',
            'price' => 170,
            'available' => 1,
            'amount' => 1000,
            'volume' => 3,
        ]);
        Product::create([
            'category_id' => 4,
            'name' => 'Компот «Сливовый»',
            'description' => 'Состав: слива свежая целая с косточкой, вода питьевая, сахар
                              Пищевая ценность: в 100г консервов: Углеводы- 14,0г, витамины РР-0,3мг, С-2мг
                              Энергетическая ценность/ калорийность: 222кДж/53ккал',
            'price' => 130,
            'available' => 1,
            'amount' => 1000,
            'volume' => 1,
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Джем мандариновый',
            'description' => 'Состав: мандарины свежие, сахар-песок
                              Пищевая ценность: в 100г консервов: Углеводы- 68г
                              Энергетическая ценность/ калорийность:1138кДж/272ккал',
            'price' => 120,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 9,
            'name' => 'Повидло тыквенное',
            'description' => 'Состав: тыква свежая продовольственная, сахар, лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 61г
                              Энергетическая ценность/ калорийность:1021кДж/244ккал',
            'price' => 120,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Повидло сливовое',
            'description' => 'Состав: пюре сливовое свежеизготовленное, сахар
                              Пищевая ценность: в 100г консервов: Углеводы- 61г
                              Энергетическая ценность/ калорийность:1021кДж/244ккал',
            'price' => 110,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Повидло алычовое',
            'description' => 'Состав: пюре алычовое, сахар-песок
                              Пищевая ценность: в 100г консервов: Углеводы- 61г
                              Энергетическая ценность/ калорийность:1021кДж/244ккал',
            'price' => 110,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Повидло яблочно-лимонное',
            'description' => 'Состав: пюре яблочное свежеизготовленное, пюре лимонное концентрированное, сахар.
                              Пищевая ценность: в 100г консервов: Углеводы- 61г
                              Энергетическая ценность/ калорийность:1021кДж/244ккал',
            'price' => 120,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 9,
            'name' => 'Особенное тыквенное повидло',
            'description' => 'Состав: тыква свежая продовольственная, сахар, лимонная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 61г
                              Энергетическая ценность/ калорийность:1021кДж/244ккал',
            'price' => 145,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Яблоки протертые с сахаром',
            'description' => 'Состав: яблоки свежие, сахар-песок
                              Пищевая ценность: в 100г консервов: Углеводы- 9.0г
                              Энергетическая ценность/ калорийность:151кДж/36ккал',
            'price' => 100,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'FITNESS яблоко (яблоки протертые б/сахара)',
            'description' => 'Состав: яблоки свежие
                              Пищевая ценность: в 100г консервов: Углеводы- 9.0г, витамины, мг:В1-0,04:С-52, Р-каротин,МГ-0,6
                              Энергетическая ценность/ калорийность:151кДж/36ккал',
            'price' => 85,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Арбузы консервированные',
            'description' => 'Состав: арбузы свежие, заливка: вода питьевая, соль пищевая поваренная, сахар, уксусная кислота
                              Пищевая ценность: в 100г консервов: Углеводы- 7,0г
                              Энергетическая ценность/ калорийность: 151кДж/36ккал',
            'price' => 200,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Томаты маринованные',
            'description' => 'Состав: томаты свежие, маринад (вода питьевая, сахар, соль пищевая поваренная, уксусная кислота)
                              Пищевая ценность:  в 100г консервов:  Углеводы- 3,5г, витамины мг: В1-0,03; РР-0,3; С-14
                              Энергетическая ценность/ калорийность: 59кДж/14ккал',
            'price' => 220,
            'available' => 1,
            'amount' => 1000,
            'volume' => 2,
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Томаты маринованные',
            'description' => 'Состав: томаты свежие, маринад (вода питьевая, сахар, соль пищевая поваренная, уксусная кислота)
                              Пищевая ценность:  в 100г консервов:  Углеводы- 3,5г, витамины мг: В1-0,03; РР-0,3; С-14
                              Энергетическая ценность/ калорийность: 59кДж/14ккал',
            'price' => 130,
            'available' => 1,
            'amount' => 1000,
            'volume' => 1,
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Огурцы в заливке',
            'description' => 'Состав: огурцы свежие, маринад (вода питьевая, соль пищевая поваренная, лимонная кислота) специи(перец черный горошком, перец душистый горошком, лавровый лист, чеснок свежий, зелень)
                              Пищевая ценность:  в 100г консервов: Углеводы- 3,0г, витамины мг: РР-0,2
                              Энергетическая ценность/ калорийность: 50кДж/12ккал',
            'price' => 240,
            'available' => 1,
            'amount' => 1000,
            'volume' => 3,
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Томаты в заливке',
            'description' => 'Состав: томаты свежие, томатная заливка (томаты свежие, соль пищевая поваренная, уксусная кислота).
                              Пищевая ценность:  в 100г консервов: Углеводы- 4,0г
                              Энергетическая ценность/ калорийность: 67кДж/16ккал',
            'price' => 135,
            'available' => 1,
            'amount' => 1000,
            'volume' => 1,
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Огурцы маринованные',
            'description' => 'Состав: огурцы свежие, маринад (вода питьевая, соль пищевая поваренная, сахар, уксусная кислота) специи (перец черный горошком, перец душистый горошком, лавровый лист, чеснок свежий, зелень, семена горчицы.)
                              Пищевая ценность: в 100г консервов:  Углеводы- 3,0г, витамины мг: В1-02; РР-0,11; С-5,5
                              Энергетическая ценность/ калорийность: 50кДж/12ккал',
            'price' => 150,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Капуста маринованная со свеклой',
            'description' => 'Состав: капуста белокочанная свежая, свекла столовая свежая, маринад (вода питьевая, соль пищевая поваренная, сахар, уксусная кислота).
                              Пищевая ценность: в 100г консервов: витамины, мг. В1-0,03; РР-0,22; С-28, углеводы- 7,0г
                              Энергетическая ценность/ калорийность:117кДж/28ккал',
            'price' => 150,
            'available' => 1,
            'amount' => 1000,
            'volume' => 1,
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Перец маринованный резанный',
            'description' => 'Состав: перец сладкий свежий, маринад (вода питьевая, соль пищевая поваренная, сахар-песок, уксусная кислота)
                              Пищевая ценность: в 100г консервов: Углеводы- 5,1г, витамины, мг. В-0,06, РР-0,6, С-138, в-каротин,мг-1,1
                              Энергетическая ценность:84кДж/20ккал',
            'price' => 80,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Лечо любительское',
            'description' => 'Состав: перец свежий, заливка   (вода питьевая, томатная паста, яблочное пюре, сахар, соль поваренная пищевая, чеснок свежий, перец молотый, лавровый лист, уксусная кислота)
                              Пищевая ценность: в 100г консервов: Углеводы- 12,0г
                              Энергетическая ценность/ калорийность: 201кДж/48ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Икра из кабачков',
            'description' => 'Состав: кабачки свежие, лук репчатый свежий, морковь столовая свежая, томатная паста, масло подсолнечное рафинированное, соль пищевая поваренная, сахар, перец душистый, перец черный
                              Пищевая ценность: в 100г консервов: Белки-1,0г, Жиры-7,0г, Углеводы- 7,0г
                              Энергетическая ценность/ калорийность: 380кДж/90ккал',
            'price' => 80,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Икра из баклажанов',
            'description' => 'Состав: баклажаны свежие, лук репчатый свежий, морковь столовая свежая, томатная паста, масло подсолнечное рафинированное, соль пищевая поваренная, сахар, перец душистый, перец черный
                              Пищевая ценность: в 100г консервов: Жиры-9,0г, Углеводы-8.0г
                              Энергетическая ценность/ калорийность: 470кДж/110ккал',
            'price' => 90,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Рассольник',
            'description' => 'Состав: картофель, крупа перловая, огурцы соленые, лук свежий, морковь свежая, жир животный, томатная паста, мука пшеничная 1 сорт, соль пищевая поваренная, перец черный, лавровый лист, белые коренья
                              Пищевая ценность: в 100г консервов:  белки-3,5; жиры-5,0; углеводы- 19г; витамины мг: каротин-0,9, С-4,0
                              Энергетическая ценность/ калорийность:570 кДж \140ккал',
            'price' => 110,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Борщ',
            'description' => 'Состав: свекла столовая свежая, капуста белокочанная квашенная, картофель свежий, лук репчатый свежий, морковь столовая свежая, жир животный, томатная паста, соль пищевая поваренная, мука пшеничная 1 сорт,  перец черный, лист лавровый
                              Пищевая ценность: в 100г консервов: белки-2,5г; жиры-5,0г; углеводы- 9,0г
                              Энергетическая ценность/ калорийность: 380кДж/90ккал',
            'price' => 110,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Солянка овощная',
            'description' => 'Состав: капуста квашеная, огурцы соленые, масло подсолнечное рафинированное, лук репчатый свежий, сахар, томатная паста, перец душистый, перец черный, лист лавровый
                              Пищевая ценность: в 100г консервов: Белки-3,5г, Жиры-10,0г, Углеводы- 6,5г
                              Энергетическая ценность/ калорийность: 540кДж/130ккал',
            'price' => 110,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 6,
            'name' => 'Овощное ассорти из капусты (салат «Загадка»)',
            'description' => 'Состав: капуста белокочанная свежая, перец сладкий свежий, лук репчатый свежий, морковь столовая свежая, заливка(соль пищевая поваренная, сахар-песок, уксусная кислота, масло подсолнечное рафинированное), перец черный молотый, перец душистый молотый
                              Пищевая ценность: в 100г консервов:  Углеводы- 3,9г, Витамины мг: В1-0,04; РР-0,3; в-каротин, мг-0,6',
            'price' => 80,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Солянка овощная с грибами',
            'description' => 'Состав: капуста квашенная, огурцы соленые, грибы маринованные, лук репчатый свежий, масло подсолнечное рафинированное, сахар, томатная паста, перец душистый, перец черный, лист лавровый.
                              Пищевая ценность: в 100г консервов: Белки-3,5г, Жиры-7,0г, Углеводы- 7,0г
                              Энергетическая ценность/ калорийность: 440кДж/100ккал',
            'price' => 130,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Каша гречневая с мясом',
            'description' => 'Состав: крупа гречневая, говядина, жир говяжий топленый, лук репчатый свежий, соль поваренная пищевая, перец черный
                              Пищевая ценность: в 100г консервов: белки – 6,0г; углеводы- 17,0г; жиры – 22,0 г
                              Энергетическая ценность/ калорийность: 290 ккал с говядиной',
            'price' => 155,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Каша перловая с мясом',
            'description' => 'Состав: крупа перловая, говядина, жир говяжий топленый, лук репчатый свежий, соль поваренная пищевая, перец черный
                              Пищевая ценность: в 100г консервов: белки – 6,0г; углеводы- 12,0г; жиры – 22,0 г
                              Энергетическая ценность/ калорийность: 270 ккал с говядиной',
            'price' => 140,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Соус томатный',
            'description' => 'Состав: томатная паста, вода питьевая, сахар, соль пищевая поваренная, корица, гвоздика, чеснок свежий, перец душистый, перец черный
                              Пищевая ценность: в 100г консервов: углеводы- 22,0г; жиры-4,0г
                              Энергетическая ценность/ калорийность: 370кДж/90ккал',
            'price' => 110,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Томатная паста',
            'description' => 'Состав: паста томатная, вода питьевая
                              Пищевая ценность:  в 100г консервов: Витамины мг: С-37,5, Углеводы- 15,8г
                              Энергетическая ценность/ калорийность: 264кДж/63,2ккал',
            'price' => 135,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Икра из тыквы',
            'description' => 'Состав: тыква свежая, лук репчатый свежий, морковь столовая свежая, томатная паста, масло подсолнечное рафинированное, соль пищевая поваренная, сахар, перец душистый, перец черный
                              Пищевая ценность: в 100г консервов: Жиры-7,0г, Углеводы- 8,0г
                              Энергетическая ценность/ калорийность: 400кДж/95ккал',
            'price' => 95,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 8,
            'name' => 'Повидло яблочное',
            'description' => 'Состав: пюре яблочное свежеизготовленное, сахар
                              Пищевая ценность: в 100г консервов: Углеводы- 61г
                              Энергетическая ценность/ калорийность:1021кДж/244ккал',
            'price' => 100,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);
        Product::create([
            'category_id' => 7,
            'name' => 'Горох со шпиком',
            'description' => 'Состав: горох продовольственный, шпик, лук репчатый свежий, чеснок свежий , томатная паста, соль пищевая поваренная, сахар, перец черный , уксусная кислота
                              Пищевая ценность: в 100г консервов: белки-5,5г; жиры-4.5г; углеводы- 14,0г
                              Энергетическая ценность/ калорийность: 507кДж /121ккал',
            'price' => 65,
            'available' => 1,
            'amount' => 1000,
            'volume' => 0.5,
        ]);

    }
}
