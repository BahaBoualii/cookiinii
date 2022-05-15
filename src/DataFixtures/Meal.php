<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Meal extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $meal1 = new \App\Entity\Meal();
        $meal1->setName("Beignets de courgette");
        $meal1->setCalories(284.53);
        $meal1->setCategories("");
        $meal1->setPrice(00);
        $meal1->setDescription("This easy recipe with jambon and parmesan is ideal for getting kids to eat vegetables!");
        $meal1->setIngredients("");
        $meal1->setTime(27);
        $meal1->setRating(4.5);
        $meal1->setPicture("img/Beignetsdecourgette.png");

        $manager -> persist($meal1);

        $meal2 = new \App\Entity\Meal();
        $meal2->setName("Chicken Burger");
        $meal2->setCalories(557.99);
        $meal2->setCategories("");
        $meal2->setPrice(00);
        $meal2->setDescription("Chicken burgers get a bad rap. They often get left in the dust by other burger alternatives like salmon, turkey, and veggies. While they can definitely be a tad bit lean, it does not automatically lead to a boring burger!");
        $meal2->setIngredients("");
        $meal2->setTime(35);
        $meal2->setRating(4);
        $meal2->setPicture("img/ChickenBurger.png");

        $manager -> persist($meal2);

        $meal3 = new \App\Entity\Meal();
        $meal3->setName("Chicken Nuggets");
        $meal3->setCalories(270);
        $meal3->setCategories("");
        $meal3->setPrice(00);
        $meal3->setDescription("Chicken nuggets are a real kid-pleaser! Adults will enjoy this recipe for a tasty appetizer, too! Serve warm, with your favorite dipping sauces if desired.");
        $meal3->setIngredients("");
        $meal3->setTime(12);
        $meal3->setRating(4);
        $meal3->setPicture("img/Chicken-Nuggets-sq.jpg");

        $manager -> persist($meal3);

        $meal4 = new \App\Entity\Meal();
        $meal4->setName("Chickpea & Carrot Falafel");
        $meal4->setCalories(870);
        $meal4->setCategories("");
        $meal4->setPrice(00);
        $meal4->setDescription("We've taken inspiration from this classic Middle Eastern dish and made it our own, adding grated carrot, fried onions, and Indian garam masala into the mix. Our patties are served over the toasted naan, with tzatziki sauce and spinach leaves.");
        $meal4->setIngredients("");
        $meal4->setTime(35);
        $meal4->setRating(4.2);
        $meal4->setPicture("img/ChickpeaandCarrotFalafel.png");

        $manager -> persist($meal4);

        $meal5 = new \App\Entity\Meal();
        $meal5->setName("Chocolate Mousse");
        $meal5->setCalories(455);
        $meal5->setCategories("");
        $meal5->setPrice(00);
        $meal5->setDescription("Ask anyone to describe a chocolate mousse and they will generally answer with a texture adjective—“fluffy” or “airy”—that's the result of the cream. Heavy cream is whipped to increase its volume and here many chefs do themselves a disservice by over whipping, leading to a denser finished product.");
        $meal5->setIngredients("");
        $meal5->setTime(20);
        $meal5->setRating(4);
        $meal5->setPicture("img/ChocoloateMousse.jpg");

        $manager -> persist($meal5);

        $meal6 = new \App\Entity\Meal();
        $meal6->setName("Mhancha");
        $meal6->setCalories(459.97);
        $meal6->setCategories("");
        $meal6->setPrice(00);
        $meal6->setDescription("We propose a savory version of this pastry from Algeria: a snail of brick sheets filled with chicken and vegetables.");
        $meal6->setIngredients("");
        $meal6->setTime(50);
        $meal6->setRating(3.7);
        $meal6->setPicture("img/mhancha.png");

        $manager -> persist($meal6);

        $meal7 = new \App\Entity\Meal();
        $meal7->setName("Salade Nicoise");
        $meal7->setCalories(740);
        $meal7->setCategories("");
        $meal7->setPrice(00);
        $meal7->setDescription("For this new veggie-heavy spin on a classic French dish, Niçoise Salad, potatoes, asparagus, and carrots are roasted until lightly browned and tender. The veggies are added to a plate with arugula, hard-boiled eggs, and crisp green beans and topped with a drizzle with a creamy mustard dressing.");
        $meal7->setIngredients("");
        $meal7->setTime(35);
        $meal7->setRating(4.9);
        $meal7->setPicture("img/SaladeNicoise.png");

        $manager -> persist($meal7);

        $meal8 = new \App\Entity\Meal();
        $meal8->setName("Shrimp Pasta");
        $meal8->setCalories(652);
        $meal8->setCategories("");
        $meal8->setPrice(00);
        $meal8->setDescription("Creamy garlic butter shrimp pasta is an elegant pasta dish with big flavors! It’s so quick and easy, and perfect for a weeknight dinner as it’s ready in just 15-20 minutes. Serve this for a Romantic date night, for a special occasion, or as a family meal. Either way, everyone will love it!");
        $meal8->setIngredients("");
        $meal8->setTime(20);
        $meal8->setRating(4.7);
        $meal8->setPicture("img/ShrimpPasta.jpg");

        $manager -> persist($meal8);

        $meal9 = new \App\Entity\Meal();
        $meal9->setName("Turkish Beef Lahmajoun");
        $meal9->setCalories(1050);
        $meal9->setCategories("");
        $meal9->setPrice(00);
        $meal9->setDescription("This flatbread is known to be the Middle East's version of pizza. We use naan as a quick-to-prepare hack instead of fresh dough as the base for this flatbread and top it with spiced grass-fed ground beef. Roasted red peppers and toasted walnuts make a rich relish topping, and sour cream adds a cooling drizzle on top.");
        $meal9->setIngredients("");
        $meal9->setTime(25);
        $meal9->setRating(4);
        $meal9->setPicture("img/TurkishBeefLahmajoun.png");

        $manager -> persist($meal9);

        $manager->flush();
    }
}
