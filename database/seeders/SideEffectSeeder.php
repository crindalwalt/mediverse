<?php

namespace Database\Seeders;

use App\Models\Medicine;
use App\Models\SideEffect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SideEffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sideEffects = [
            // Ibuprofen side effects (medicine_id will be set dynamically)
            ['medicine_name' => 'Ibuprofen', 'title' => 'Stomach upset', 'description' => 'May cause nausea, indigestion, or stomach pain especially when taken without food.', 'is_positive' => false, 'severity' => 'mild'],
            ['medicine_name' => 'Ibuprofen', 'title' => 'Headache relief', 'description' => 'Effectively reduces headache pain within 30-60 minutes of taking.', 'is_positive' => true, 'severity' => null],
            ['medicine_name' => 'Ibuprofen', 'title' => 'Dizziness', 'description' => 'Some patients may experience mild dizziness or lightheadedness.', 'is_positive' => false, 'severity' => 'mild'],

            // Amoxicillin side effects
            ['medicine_name' => 'Amoxicillin', 'title' => 'Diarrhea', 'description' => 'Antibiotics can disrupt gut flora, leading to loose stools or diarrhea.', 'is_positive' => false, 'severity' => 'moderate'],
            ['medicine_name' => 'Amoxicillin', 'title' => 'Allergic reaction', 'description' => 'Rash, itching, or in severe cases, anaphylaxis may occur in penicillin-allergic patients.', 'is_positive' => false, 'severity' => 'severe'],
            ['medicine_name' => 'Amoxicillin', 'title' => 'Fast infection clearance', 'description' => 'Most bacterial infections show improvement within 2-3 days of treatment.', 'is_positive' => true, 'severity' => null],

            // Metformin side effects
            ['medicine_name' => 'Metformin', 'title' => 'Gastrointestinal discomfort', 'description' => 'Nausea, bloating, and abdominal cramps are common initially but often improve with time.', 'is_positive' => false, 'severity' => 'moderate'],
            ['medicine_name' => 'Metformin', 'title' => 'Weight loss', 'description' => 'Unlike many diabetes medications, metformin may help with modest weight loss.', 'is_positive' => true, 'severity' => null],
            ['medicine_name' => 'Metformin', 'title' => 'Lactic acidosis', 'description' => 'Rare but serious condition that can occur especially in patients with kidney problems.', 'is_positive' => false, 'severity' => 'severe'],

            // Lisinopril side effects
            ['medicine_name' => 'Lisinopril', 'title' => 'Dry cough', 'description' => 'A persistent dry cough is a common side effect of ACE inhibitors affecting up to 20% of patients.', 'is_positive' => false, 'severity' => 'mild'],
            ['medicine_name' => 'Lisinopril', 'title' => 'Improved heart function', 'description' => 'Reduces strain on the heart and improves cardiovascular outcomes over time.', 'is_positive' => true, 'severity' => null],
            ['medicine_name' => 'Lisinopril', 'title' => 'Low blood pressure', 'description' => 'May cause dizziness upon standing, especially when starting treatment.', 'is_positive' => false, 'severity' => 'moderate'],

            // Sertraline side effects
            ['medicine_name' => 'Sertraline', 'title' => 'Nausea', 'description' => 'Temporary nausea is common when starting treatment, usually subsides within 1-2 weeks.', 'is_positive' => false, 'severity' => 'mild'],
            ['medicine_name' => 'Sertraline', 'title' => 'Improved mood', 'description' => 'Significant improvement in depression and anxiety symptoms after 4-6 weeks of treatment.', 'is_positive' => true, 'severity' => null],
            ['medicine_name' => 'Sertraline', 'title' => 'Sleep disturbances', 'description' => 'May cause insomnia or vivid dreams in some patients.', 'is_positive' => false, 'severity' => 'mild'],
            ['medicine_name' => 'Sertraline', 'title' => 'Sexual dysfunction', 'description' => 'Decreased libido or difficulty achieving orgasm may occur.', 'is_positive' => false, 'severity' => 'moderate'],

            // Omeprazole side effects
            ['medicine_name' => 'Omeprazole', 'title' => 'Headache', 'description' => 'Mild headaches may occur, especially during the first few days of treatment.', 'is_positive' => false, 'severity' => 'mild'],
            ['medicine_name' => 'Omeprazole', 'title' => 'Acid reflux relief', 'description' => 'Provides significant relief from heartburn and acid reflux symptoms.', 'is_positive' => true, 'severity' => null],
            ['medicine_name' => 'Omeprazole', 'title' => 'Vitamin B12 deficiency', 'description' => 'Long-term use may reduce absorption of vitamin B12.', 'is_positive' => false, 'severity' => 'moderate'],

            // Prenatal Vitamins side effects
            ['medicine_name' => 'Prenatal Vitamins', 'title' => 'Constipation', 'description' => 'Iron content may cause constipation in some women.', 'is_positive' => false, 'severity' => 'mild'],
            ['medicine_name' => 'Prenatal Vitamins', 'title' => 'Healthy fetal development', 'description' => 'Supports optimal neural tube development and overall fetal health.', 'is_positive' => true, 'severity' => null],
            ['medicine_name' => 'Prenatal Vitamins', 'title' => 'Nausea', 'description' => 'May worsen morning sickness if taken on an empty stomach.', 'is_positive' => false, 'severity' => 'mild'],

            // Cetirizine side effects
            ['medicine_name' => 'Cetirizine', 'title' => 'Drowsiness', 'description' => 'May cause mild drowsiness, especially at higher doses.', 'is_positive' => false, 'severity' => 'mild'],
            ['medicine_name' => 'Cetirizine', 'title' => 'Allergy relief', 'description' => 'Provides 24-hour relief from sneezing, runny nose, and itchy eyes.', 'is_positive' => true, 'severity' => null],
            ['medicine_name' => 'Cetirizine', 'title' => 'Dry mouth', 'description' => 'Some patients experience mild dry mouth or throat.', 'is_positive' => false, 'severity' => 'mild'],

            // Children's Acetaminophen side effects
            ['medicine_name' => 'Children\'s Acetaminophen', 'title' => 'Liver damage risk', 'description' => 'Overdose or long-term overuse can cause serious liver damage.', 'is_positive' => false, 'severity' => 'severe'],
            ['medicine_name' => 'Children\'s Acetaminophen', 'title' => 'Fever reduction', 'description' => 'Effectively reduces fever within 30 minutes of administration.', 'is_positive' => true, 'severity' => null],
            ['medicine_name' => 'Children\'s Acetaminophen', 'title' => 'Allergic reaction', 'description' => 'Rare skin reactions including rash or hives may occur.', 'is_positive' => false, 'severity' => 'moderate'],

            // Vitamin D3 side effects
            ['medicine_name' => 'Vitamin D3', 'title' => 'Improved bone strength', 'description' => 'Enhances calcium absorption leading to stronger bones and reduced fracture risk.', 'is_positive' => true, 'severity' => null],
            ['medicine_name' => 'Vitamin D3', 'title' => 'Hypercalcemia', 'description' => 'Excessive supplementation can lead to high calcium levels causing nausea and kidney problems.', 'is_positive' => false, 'severity' => 'severe'],
        ];

        $medicines = Medicine::all()->keyBy('name');

        foreach ($sideEffects as $effectData) {
            $medicine = $medicines->get($effectData['medicine_name']);

            if ($medicine) {
                SideEffect::create([
                    'medicine_id' => $medicine->id,
                    'title' => $effectData['title'],
                    'description' => $effectData['description'],
                    'is_positive' => $effectData['is_positive'],
                    'severity' => $effectData['severity'],
                ]);
            }
        }
    }
}
