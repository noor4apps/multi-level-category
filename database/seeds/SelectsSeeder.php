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
        $country01 = Level1Category::create(['name' => '01']);
        $city011 = Level2Category::create(['name' => '011', 'level1_category_id' => $country01->id]);
        $district0111 = Level3Category::create(['name' => '0111', 'level1_category_id' => $country01->id, 'level2_category_id' => $city011->id]);
        $district0112 = Level3Category::create(['name' => '0112', 'level1_category_id' => $country01->id, 'level2_category_id' => $city011->id]);
        $district0113 = Level3Category::create(['name' => '0113', 'level1_category_id' => $country01->id, 'level2_category_id' => $city011->id]);

        $city012 = Level2Category::create(['name' => '012', 'level1_category_id' => $country01->id]);
        $district0121 = Level3Category::create(['name' => '0121', 'level1_category_id' => $country01->id, 'level2_category_id' => $city012->id]);
        $district0122 = Level3Category::create(['name' => '0122', 'level1_category_id' => $country01->id, 'level2_category_id' => $city012->id]);
        $district0123 = Level3Category::create(['name' => '0123', 'level1_category_id' => $country01->id, 'level2_category_id' => $city012->id]);

        $city013 = Level2Category::create(['name' => '013', 'level1_category_id' => $country01->id]);
        $district0131 = Level3Category::create(['name' => '0131', 'level1_category_id' => $country01->id, 'level2_category_id' => $city013->id]);
        $district0132 = Level3Category::create(['name' => '0132', 'level1_category_id' => $country01->id, 'level2_category_id' => $city013->id]);
        $district0133 = Level3Category::create(['name' => '0133', 'level1_category_id' => $country01->id, 'level2_category_id' => $city013->id]);


        $country02 = Level1Category::create(['name' => '02']);
        $city021 = Level2Category::create(['name' => '021', 'level1_category_id' => $country02->id]);
        $district0211 = Level3Category::create(['name' => '0211', 'level1_category_id' => $country02->id, 'level2_category_id' => $city021->id]);
        $district0212 = Level3Category::create(['name' => '0213', 'level1_category_id' => $country02->id, 'level2_category_id' => $city021->id]);
        $district0213 = Level3Category::create(['name' => '0213', 'level1_category_id' => $country02->id, 'level2_category_id' => $city021->id]);

        $city022 = Level2Category::create(['name' => '022', 'level1_category_id' => $country02->id]);
        $district0221 = Level3Category::create(['name' => '0221', 'level1_category_id' => $country02->id, 'level2_category_id' => $city022->id]);
        $district0222 = Level3Category::create(['name' => '0222', 'level1_category_id' => $country02->id, 'level2_category_id' => $city022->id]);
        $district0223 = Level3Category::create(['name' => '0223', 'level1_category_id' => $country02->id, 'level2_category_id' => $city022->id]);

        $city023 = Level2Category::create(['name' => '023', 'level1_category_id' => $country02->id]);
        $district0231 = Level3Category::create(['name' => '0231', 'level1_category_id' => $country02->id, 'level2_category_id' => $city023->id]);
        $district0232 = Level3Category::create(['name' => '0232', 'level1_category_id' => $country02->id, 'level2_category_id' => $city023->id]);
        $district0233 = Level3Category::create(['name' => '0233', 'level1_category_id' => $country02->id, 'level2_category_id' => $city023->id]);


        $country03 = Level1Category::create(['name' => '03']);
        $city031 = Level2Category::create(['name' => '031', 'level1_category_id' => $country03->id]);
        $district0311 = Level3Category::create(['name' => '0311', 'level1_category_id' => $country02->id, 'level2_category_id' => $city031->id]);
        $district0312 = Level3Category::create(['name' => '0312', 'level1_category_id' => $country02->id, 'level2_category_id' => $city031->id]);
        $district0313 = Level3Category::create(['name' => '0313', 'level1_category_id' => $country02->id, 'level2_category_id' => $city031->id]);

        $city032 = Level2Category::create(['name' => '032', 'level1_category_id' => $country03->id]);
        $district0321 = Level3Category::create(['name' => '0321', 'level1_category_id' => $country02->id, 'level2_category_id' => $city032->id]);
        $district0322 = Level3Category::create(['name' => '0322', 'level1_category_id' => $country02->id, 'level2_category_id' => $city032->id]);
        $district0323 = Level3Category::create(['name' => '0323', 'level1_category_id' => $country02->id, 'level2_category_id' => $city032->id]);

        $city033 = Level2Category::create(['name' => '033', 'level1_category_id' => $country03->id]);
        $district0331 = Level3Category::create(['name' => '0331', 'level1_category_id' => $country02->id, 'level2_category_id' => $city033->id]);
        $district0332 = Level3Category::create(['name' => '0332', 'level1_category_id' => $country02->id, 'level2_category_id' => $city033->id]);
        $district0333 = Level3Category::create(['name' => '0333', 'level1_category_id' => $country02->id, 'level2_category_id' => $city033->id]);


    }
}
