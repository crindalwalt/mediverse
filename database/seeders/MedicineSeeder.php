<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Medicine;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $categories = Category::all();

        $medicines = [
            [
                'name' => 'Ibuprofen',
                'generic_name' => 'Ibuprofen',
                'summary' => 'A nonsteroidal anti-inflammatory drug (NSAID) used to reduce fever and treat pain or inflammation.',
                'long_description' => 'Ibuprofen is a commonly used NSAID that works by reducing hormones that cause inflammation and pain in the body. It is used to treat headaches, toothaches, menstrual cramps, muscle aches, arthritis, and minor injuries. Ibuprofen should be taken with food or milk to prevent stomach upset. It is available over-the-counter in lower doses and by prescription in higher doses.',
                'category_slug' => 'medications',
            ],
            [
                'name' => 'Amoxicillin',
                'generic_name' => 'Amoxicillin trihydrate',
                'summary' => 'A penicillin-type antibiotic used to treat a wide variety of bacterial infections.',
                'long_description' => 'Amoxicillin is a broad-spectrum antibiotic belonging to the penicillin group. It works by stopping the growth of bacteria. This antibiotic treats bacterial infections of the ear, nose, throat, urinary tract, skin, and lungs. It is important to complete the full course of treatment even if symptoms improve to prevent antibiotic resistance.',
                'category_slug' => 'diseases',
            ],
            [
                'name' => 'Metformin',
                'generic_name' => 'Metformin hydrochloride',
                'summary' => 'An oral diabetes medicine that helps control blood sugar levels in type 2 diabetes.',
                'long_description' => 'Metformin is the first-line medication for type 2 diabetes. It works by decreasing glucose production in the liver and improving insulin sensitivity. Metformin is often prescribed alongside lifestyle changes including diet and exercise. It may also help with weight management and has been studied for potential benefits in other conditions.',
                'category_slug' => 'diseases',
            ],
            [
                'name' => 'Lisinopril',
                'generic_name' => 'Lisinopril',
                'summary' => 'An ACE inhibitor used to treat high blood pressure and heart failure.',
                'long_description' => 'Lisinopril belongs to a class of drugs called ACE inhibitors. It works by relaxing blood vessels, which helps lower blood pressure and makes it easier for the heart to pump blood. It is used to treat hypertension, congestive heart failure, and to improve survival after heart attacks. Regular monitoring of blood pressure and kidney function is recommended while taking this medication.',
                'category_slug' => 'men-health',
            ],
            [
                'name' => 'Sertraline',
                'generic_name' => 'Sertraline hydrochloride',
                'summary' => 'An antidepressant medication used to treat depression, anxiety, and other mental health conditions.',
                'long_description' => 'Sertraline is a selective serotonin reuptake inhibitor (SSRI) that helps restore the balance of serotonin in the brain. It is prescribed for major depressive disorder, panic disorder, PTSD, OCD, and social anxiety disorder. It may take several weeks to feel the full benefits. Patients should not stop taking sertraline abruptly without consulting their doctor.',
                'category_slug' => 'mental-health',
            ],
            [
                'name' => 'Omeprazole',
                'generic_name' => 'Omeprazole',
                'summary' => 'A proton pump inhibitor (PPI) used to reduce stomach acid production.',
                'long_description' => 'Omeprazole is a proton pump inhibitor that decreases the amount of acid produced in the stomach. It is used to treat gastroesophageal reflux disease (GERD), stomach ulcers, and conditions that cause excess stomach acid. Omeprazole should be taken before meals for best results. Long-term use may require monitoring for vitamin B12 and magnesium levels.',
                'category_slug' => 'medications',
            ],
            [
                'name' => 'Prenatal Vitamins',
                'generic_name' => 'Multivitamin with Folic Acid and Iron',
                'summary' => 'A comprehensive vitamin supplement designed to support pregnancy and fetal development.',
                'long_description' => 'Prenatal vitamins contain essential nutrients needed during pregnancy including folic acid, iron, calcium, and DHA. Folic acid is crucial for preventing neural tube defects in the developing baby. Iron supports increased blood production, while calcium supports bone development. These vitamins should be started before conception and continued throughout pregnancy and breastfeeding.',
                'category_slug' => 'women-health',
            ],
            [
                'name' => 'Cetirizine',
                'generic_name' => 'Cetirizine hydrochloride',
                'summary' => 'An antihistamine used to relieve allergy symptoms such as runny nose, sneezing, and itchy eyes.',
                'long_description' => 'Cetirizine is a second-generation antihistamine that blocks histamine, a substance in the body that causes allergic symptoms. It is used for hay fever, allergic rhinitis, and chronic urticaria (hives). Unlike first-generation antihistamines, cetirizine causes less drowsiness and has a longer duration of action, typically lasting 24 hours.',
                'category_slug' => 'medications',
            ],
            [
                'name' => 'Children\'s Acetaminophen',
                'generic_name' => 'Acetaminophen (Paracetamol)',
                'summary' => 'A pain reliever and fever reducer formulated specifically for children.',
                'long_description' => 'Children\'s Acetaminophen is a gentle pain reliever and fever reducer suitable for infants and children. It works by blocking pain signals in the brain and reducing fever. Available in liquid, chewable tablets, and suppository forms, dosing is based on the child\'s weight. It is important to use the measuring device provided and avoid combining with other acetaminophen-containing products.',
                'category_slug' => 'child-health',
            ],
            [
                'name' => 'Vitamin D3',
                'generic_name' => 'Cholecalciferol',
                'summary' => 'A vitamin supplement essential for bone health and immune function.',
                'long_description' => 'Vitamin D3 is the natural form of vitamin D that your body produces when exposed to sunlight. It is essential for calcium absorption, bone health, immune function, and muscle function. Many people are deficient in vitamin D, especially those living in northern climates or with limited sun exposure. Supplementation can help maintain healthy vitamin D levels year-round.',
                'category_slug' => 'nutrition',
            ],
        ];

        foreach ($medicines as $medicineData) {
            $category = $categories->where('slug', $medicineData['category_slug'])->first();

            Medicine::create([
                'name' => $medicineData['name'],
                'slug' => Str::slug($medicineData['name']),
                'category_id' => $category ? $category->id : 1,
                'generic_name' => $medicineData['generic_name'],
                'summary' => $medicineData['summary'],
                'long_description' => $medicineData['long_description'],
                'status' => fake()->randomElement(['draft', 'published']),
                'published_at' => fake()->optional(0.7)->dateTimeBetween('-1 year', 'now'),
                'user_id' => $user?->id,
            ]);
        }
    }
}
