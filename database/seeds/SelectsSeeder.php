<?php

use App\Level1Category;
use App\Level2Category;
use App\Level3Category;
use Illuminate\Database\Seeder;

class SelectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $country01 = Level1Category::create(['name' => ['ar'=>'01 ar','en'=>'01 en']]);
        $city011 = Level2Category::create(['name' => ['ar'=>'011 ar','en'=>'011 en'], 'level1_category_id' => $country01->id]);
        $district0111 = Level3Category::create(['name' => ['ar'=>'0111 ar','en'=>'0111 en'], 'level1_category_id' => $country01->id, 'level2_category_id' => $city011->id]);
        $district0112 = Level3Category::create(['name' => ['ar'=>'0112 ar','en'=>'0112 en'], 'level1_category_id' => $country01->id, 'level2_category_id' => $city011->id]);
        $district0113 = Level3Category::create(['name' => ['ar'=>'0113 ar','en'=>'0113 en'], 'level1_category_id' => $country01->id, 'level2_category_id' => $city011->id]);

        $city012 = Level2Category::create(['name' =>  ['ar'=>'012 ar','en'=>'012 en'], 'level1_category_id' => $country01->id]);
        $district0121 = Level3Category::create(['name' => ['ar'=>'0121 ar','en'=>'0121 en'], 'level1_category_id' => $country01->id, 'level2_category_id' => $city012->id]);
        $district0122 = Level3Category::create(['name' => ['ar'=>'0122 ar','en'=>'0122 en'], 'level1_category_id' => $country01->id, 'level2_category_id' => $city012->id]);
        $district0123 = Level3Category::create(['name' => ['ar'=>'0123 ar','en'=>'0123 en'], 'level1_category_id' => $country01->id, 'level2_category_id' => $city012->id]);

        $city013 = Level2Category::create(['name' => ['ar'=>'013 ar','en'=>'013 en'], 'level1_category_id' => $country01->id]);
        $district0131 = Level3Category::create(['name' => ['ar'=>'0131 ar','en'=>'0131 en'], 'level1_category_id' => $country01->id, 'level2_category_id' => $city013->id]);
        $district0132 = Level3Category::create(['name' => ['ar'=>'0132 ar','en'=>'0132 en'], 'level1_category_id' => $country01->id, 'level2_category_id' => $city013->id]);
        $district0133 = Level3Category::create(['name' => ['ar'=>'0133 ar','en'=>'0133 en'], 'level1_category_id' => $country01->id, 'level2_category_id' => $city013->id]);


        $country02 = Level1Category::create(['name' => ['ar'=>'02 ar','en'=>'02 en']]);
        $city021 = Level2Category::create(['name' => ['ar'=>'021 ar','en'=>'021 en'], 'level1_category_id' => $country02->id]);
        $district0211 = Level3Category::create(['name' => ['ar'=>'0211 ar','en'=>'0211 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city021->id]);
        $district0212 = Level3Category::create(['name' => ['ar'=>'0213 ar','en'=>'0213 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city021->id]);
        $district0213 = Level3Category::create(['name' => ['ar'=>'0213 ar','en'=>'0213 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city021->id]);

        $city022 = Level2Category::create(['name' => ['ar'=>'022 ar','en'=>'022 en'], 'level1_category_id' => $country02->id]);
        $district0221 = Level3Category::create(['name' => ['ar'=>'0221 ar','en'=>'0221 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city022->id]);
        $district0222 = Level3Category::create(['name' => ['ar'=>'0222 ar','en'=>'0222 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city022->id]);
        $district0223 = Level3Category::create(['name' => ['ar'=>'0223 ar','en'=>'0223 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city022->id]);

        $city023 = Level2Category::create(['name' => ['ar'=>'023 ar','en'=>'023 en'], 'level1_category_id' => $country02->id]);
        $district0231 = Level3Category::create(['name' => ['ar'=>'0231 ar','en'=>'0231 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city023->id]);
        $district0232 = Level3Category::create(['name' => ['ar'=>'0232 ar','en'=>'0232 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city023->id]);
        $district0233 = Level3Category::create(['name' => ['ar'=>'0233 ar','en'=>'0233 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city023->id]);


        $country03 = Level1Category::create(['name' => ['ar'=>'03 ar','en'=>'03 en']]);
        $city031 = Level2Category::create(['name' => ['ar'=>'031 ar','en'=>'031 en'], 'level1_category_id' => $country03->id]);
        $district0311 = Level3Category::create(['name' => ['ar'=>'0311 ar','en'=>'0311 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city031->id]);
        $district0312 = Level3Category::create(['name' => ['ar'=>'0312 ar','en'=>'0312 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city031->id]);
        $district0313 = Level3Category::create(['name' => ['ar'=>'0313 ar','en'=>'0313 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city031->id]);

        $city032 = Level2Category::create(['name' => ['ar'=>'032 ar','en'=>'032 en'], 'level1_category_id' => $country03->id]);
        $district0321 = Level3Category::create(['name' => ['ar'=>'0321 ar','en'=>'0321 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city032->id]);
        $district0322 = Level3Category::create(['name' => ['ar'=>'0322 ar','en'=>'0322 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city032->id]);
        $district0323 = Level3Category::create(['name' => ['ar'=>'0323 ar','en'=>'0323 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city032->id]);

        $city033 = Level2Category::create(['name' => ['ar'=>'033 ar','en'=>'033 en'], 'level1_category_id' => $country03->id]);
        $district0331 = Level3Category::create(['name' => ['ar'=>'0331 ar','en'=>'0331 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city033->id]);
        $district0332 = Level3Category::create(['name' => ['ar'=>'0332 ar','en'=>'0332 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city033->id]);
        $district0333 = Level3Category::create(['name' => ['ar'=>'0333 ar','en'=>'0333 en'], 'level1_category_id' => $country02->id, 'level2_category_id' => $city033->id]);


    }
}
