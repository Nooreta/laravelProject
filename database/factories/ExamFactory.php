<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $i=0;
        $i++;
        return [
            'name'=>json_encode([
                "ar"=>$this->faker->word(),
                "en"=>$this->faker->word()
            ]),
            'desc'=>json_encode([
                "ar"=>$this->faker->text(5000),
                "en"=>$this->faker->text(5000)
            ]),
            'img'=>"exam/$i.png",
           'difficulty'=>$this->faker->numberBetween(1,5),
           'duration_mins'=>$this->faker->numberBetween(1,3)*30,
           'question_no'=>15,
            //
        ];
    }
}
