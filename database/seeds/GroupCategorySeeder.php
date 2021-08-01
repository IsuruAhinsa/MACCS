<?php

use App\Category;
use App\Group;
use Illuminate\Database\Seeder;

class GroupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->delete();

        foreach (Group::groups() as $group) {
            $group = Group::create(['group_name' => $group]);
            foreach (Category::categories() as $category) {
                Category::create([
                    'group_id' => $group->id,
                    'category_name' => $category,
                ]);
            }
        }

       $values = [
           ['category_id' => 1, 'checklist' => 'Begins to smile at people'],
           ['category_id' => 1, 'checklist' => 'Can briefly calm himself (may bring hands to mouth and suck on hand)'],
       ];

        DB::table('checklists')->insert($values);
    }
}
