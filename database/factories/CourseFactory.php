<?php
use Faker\Factory;
use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
   
    return [
        'title'=>$faker->name,
        'plateform'=>$faker->randomElement(['YouTube', 'Lynda', 'Coursera', 'Udemy', 'edX', 'Codeschool','Codeacademy', 'Treehouse', 'Udacity', 'W3schools', 'FreeCodeCamp', 'pluralsight', 'Microsoft Virtual Academy', 'Sololearn', 'programmr', 'Mozilla Developer Network', 'Eduonix', 'Laracast', 'Scotch', 'Tutplus', 'Tutorialzine', 'Video2Brain', 'openclassrooms', 'Skillshare', 'Alison', 'linuxAcademy', 'FutureLearn', 'Gymnasium', 'other']),
      'url'=>$faker->url,
      'startDate'=>$faker->date,
      'finishDate'=>$faker->date,
      'category'=>$faker->randomElement(['Language', 'Framework', 'Library', 'Tool', 'Program']),
      'description'=>$faker->realText
    ];
});
