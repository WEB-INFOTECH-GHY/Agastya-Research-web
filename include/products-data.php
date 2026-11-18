<?php
/* ==================================================================
   PRODUCT DATA - the ONLY place you edit to add / change products.
   Every product has its own page file: <id>.php
   After adding a product, open make-product-pages.php once to create it.

   Fields:
     id        URL slug (lowercase letters, numbers, hyphens)
     name      brand name
     div       main | opg | usr
     cat       category
     form      type (Tablets, Syrup, Capsules ...)
     comp      composition
     summary   short text shown on product cards and as the meta description
     benefits  how it works / key points      (list)
     uses      diseases and conditions it is used for   (list)
     image     path to the product photo, from the site root
   Optional: seo_title, seo_desc, hidden => true (keep off the site)
================================================================== */

$divisions = [
    'main' => [
        'title' => 'Main Division',
        'desc'  => 'Our core range, covering gastro and liver care, urology, anti-infectives, pain relief and nutritional support.',
    ],
    'opg' => [
        'title' => 'OPG Division',
        'desc'  => 'A broad range of anti-infectives, gastro, urology, women’s health, nerve care, skin, allergy and nutritional support products.',
    ],
    'usr' => [
        'title' => 'USR Division',
        'desc'  => 'Focused on neuro care and nutritional support, alongside gastro, anti-infective, allergy and bone health products.',
    ],
];

$products = [

    /* ===================== MAIN DIVISION ===================== */
    ['id'=>'usilo-d','name'=>'Usilo D','div'=>'main','cat'=>'Urology','form'=>'Tablets',
     'comp'=>'Silodosin + Dutasteride',
     'image'=>'',
     'summary'=>'Used to treat benign prostatic hyperplasia (BPH), also known as an enlarged prostate.',
     'benefits'=>['Silodosin helps relax the muscles in the prostate and bladder, making it easier to urinate','Dutasteride works by shrinking the enlarged prostate over time, which also improves urine flow and reduces symptoms'],
     'uses'=>['Benign Prostatic Hyperplasia (BPH): the prostate gland is enlarged, but not cancerous','Trouble starting to urinate','Weak urine flow','Feeling that you still need to urinate after going','Needing to urinate very often, especially at night']],

    ['id'=>'exoroxy-p','name'=>'Exoroxy P','div'=>'main','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Etoricoxib + Paracetamol',
     'image'=>'web/product/main/4.png',
     'summary'=>'Used to relieve pain and reduce inflammation.',
     'benefits'=>['Relieves pain and reduces inflammation and swelling'],
     'uses'=>['Joint pain, including osteoarthritis and rheumatoid arthritis','Gout','Muscle pain','Back pain','Toothache','Headache','Post-surgery pain','Other painful conditions with swelling']],

    ['id'=>'cupiwell','name'=>'Cupiwell','div'=>'main','cat'=>'Heart & Antioxidants','form'=>'Capsules',
     'comp'=>'Curcumin 495 mg (95%) + Piperine 5 mg (95%)',
     'image'=>'web/product/new/cupiwell.jpeg',
     'summary'=>'A herbal dietary supplement combining curcumin from turmeric with piperine from black pepper, which greatly improves curcumin absorption.',
     'benefits'=>['Curcumin: the active ingredient in turmeric, known for its anti-inflammatory, antioxidant and healing properties','Piperine: an extract from black pepper that increases the absorption of curcumin in the body','Anti-inflammatory effects: helps reduce joint inflammation in conditions like osteoarthritis, rheumatoid arthritis and sports injuries','Antioxidant protection: fights free radicals and supports cell repair','Immunity support: enhances the body’s defense system','Brain and mental health: may improve memory, reduce brain fog and support mood','Digestive health: supports healthy liver function and helps relieve bloating, gas and mild indigestion','Heart and metabolic health: may help support healthy cholesterol, blood pressure and blood sugar levels'],
     'uses'=>['Arthritis (osteoarthritis and rheumatoid arthritis)','Liver conditions (fatty liver, mild hepatitis)','Inflammatory bowel conditions (colitis)','Skin conditions such as eczema and psoriasis','Chronic infections or low immunity','Age-related conditions','General wellness: better mobility, mental clarity and immunity']],

    ['id'=>'pantawell','name'=>'Pantawell','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Pantoprazole',
     'image'=>'',
     'summary'=>'A proton pump inhibitor (PPI) that reduces the amount of acid the stomach makes.',
     'benefits'=>['Pantoprazole is a proton pump inhibitor (PPI) that reduces the amount of acid your stomach makes','Commonly used to treat acid-related disorders'],
     'uses'=>['Gastroesophageal Reflux Disease (GERD): acid flows backward into the food pipe, causing heartburn and irritation','Peptic ulcer disease: gastric (stomach) and duodenal ulcers','Erosive esophagitis: inflammation and damage to the food pipe caused by acid','Zollinger-Ellison syndrome: a rare condition with excess stomach acid','Burning chest pain (heartburn)','Sour burps and nausea due to acid','Stomach discomfort after eating spicy or oily food']],

    ['id'=>'pantawell-iv','name'=>'Pantawell IV','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Injection',
     'comp'=>'Pantoprazole 40 mg (IV injection)',
     'image'=>'',
     'summary'=>'Intravenous pantoprazole for acid-related conditions, including patients who cannot take oral medicines.',
     'benefits'=>['Treats heartburn and prevents damage to the esophagus caused by stomach acid','Prophylaxis for stress ulcers: prevents stomach ulcers in critically ill patients who are unable to take oral medications'],
     'uses'=>['Gastroesophageal Reflux Disease (GERD)','Erosive esophagitis','Zollinger-Ellison syndrome: the stomach produces too much acid, leading to peptic ulcers','Peptic ulcers','Stress ulcers: ulcers that develop in critically ill patients, often in hospital']],

    ['id'=>'pantawell-d','name'=>'Pantawell D','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Pantoprazole 40 mg + Domperidone 30 mg',
     'image'=>'',
     'summary'=>'Reduces stomach acid and helps the stomach empty faster, easing bloating, nausea and early fullness.',
     'benefits'=>['Pantoprazole reduces the acid in your stomach, helping with heartburn and irritation caused by acid reflux','Domperidone helps your stomach move food more quickly, which reduces bloating, nausea and feeling full too soon'],
     'uses'=>['GERD (Gastroesophageal Reflux Disease): stomach acid moves up into the esophagus, causing heartburn and discomfort','Gastroparesis: the stomach does not empty properly, leading to nausea and bloating','Erosive esophagitis: inflammation in the esophagus caused by acid','Peptic ulcers: sores in the stomach or intestine made worse by stomach acid']],

    ['id'=>'welldon-cv','name'=>'Welldon CV','div'=>'main','cat'=>'Anti-Infectives','form'=>'Tablets',
     'comp'=>'Cefpodoxime 200 mg + Potassium Clavulanate 125 mg',
     'image'=>'web/product/new/welldon cv.jpeg',
     'summary'=>'An antibiotic combination used to treat infections caused by bacteria.',
     'benefits'=>['Cefpodoxime is an antibiotic that kills bacteria or prevents their growth','Potassium Clavulanate helps prevent certain bacteria from becoming resistant to the antibiotic','Targets bacteria such as Streptococcus pneumoniae, Haemophilus influenzae, E. coli, Staphylococcus aureus, Klebsiella and Proteus mirabilis'],
     'uses'=>['Respiratory infections: pneumonia, acute bronchitis and COPD exacerbations','Sinusitis','Tonsillitis and pharyngitis (sore throat infections)','Ear infections (otitis media), especially in children','Urinary tract infections: cystitis (bladder) and pyelonephritis (kidney)','Skin and soft tissue infections: cellulitis, wound infections, boils and abscesses','Bone and joint infections: osteomyelitis and septic arthritis']],

    ['id'=>'welliv','name'=>'Welliv','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Syrup',
     'comp'=>'Herbal hepatoprotective formulation',
     'image'=>'web/product/main/5.png',
     'summary'=>'A herbal syrup used to support liver health and digestion.',
     'benefits'=>['A blend of natural ingredients known for their beneficial effects on liver function','Liver detoxification: supports the liver in detoxifying the body by promoting bile production','Liver protection: helps protect the liver from toxins and oxidative damage','Improved digestion: helps with indigestion and bloating'],
     'uses'=>['Fatty liver disease','Hepatitis: inflammation of the liver, often due to viral infections or excessive alcohol use','Cirrhosis: supports liver function in long-term liver damage','Liver toxicity caused by drugs, alcohol or toxins','Jaundice: supports the liver’s detoxifying functions','Digestive issues such as bloating and indigestion']],

    ['id'=>'wellurso','name'=>'Wellurso','div'=>'main','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Ursodeoxycholic Acid 300 mg',
     'image'=>'web/product/main/6.png',
     'summary'=>'A bile acid used to treat certain liver and gallbladder conditions.',
     'benefits'=>['Reduces cholesterol in the gallbladder: helps dissolve cholesterol-based gallstones and prevents new ones','Improves liver function and helps protect liver cells from damage','Promotes bile flow, which is important for digestion and removing waste from the liver'],
     'uses'=>['Gallstones: dissolving small cholesterol-based gallstones in patients who are not candidates for surgery','Primary Biliary Cholangitis (PBC): a chronic liver disease where the bile ducts become damaged','Liver diseases such as cirrhosis or hepatitis, to help reduce liver damage and improve bile flow','Non-Alcoholic Fatty Liver Disease (NAFLD)']],

    ['id'=>'wellvita-gold','name'=>'Wellvita Gold','div'=>'main','cat'=>'Vitamins & Nutrition','form'=>'Soft gelatin capsules',
     'comp'=>'Calcium Citrate 200 mg + Methylcobalamin 1500 mcg + Folic Acid 1500 mcg + Calcitriol 0.25 mcg + Vitamin B6 3 mg',
     'image'=>'web/product/main/8.png',
     'summary'=>'A combination for bone health, nerve health and prevention of vitamin deficiencies.',
     'benefits'=>['Bone health: calcium citrate and calcitriol (active Vitamin D3) help strengthen bones and prevent or treat osteoporosis','Vitamin B12 deficiency: methylcobalamin treats and prevents B12 deficiency, important for nerve health and red blood cell production','Anemia prevention: folic acid and Vitamin B12 together help treat or prevent megaloblastic anemia','Nerve health: methylcobalamin and Vitamin B6 support nerve function','Pregnancy support: folic acid is crucial for fetal development and helps prevent neural tube defects'],
     'uses'=>['Osteoporosis and osteopenia (weakened bones due to low calcium and Vitamin D)','Peripheral neuropathy (nerve damage causing pain, tingling or numbness)','Megaloblastic anemia (lack of folic acid or Vitamin B12)','Chronic kidney disease, for managing calcium and Vitamin D imbalance','Fracture healing','Pregnancy-related complications, such as prevention of neural tube defects','Hypocalcemia (low calcium in the blood)','Neurological symptoms linked to Vitamin B12 deficiency, such as memory issues or balance problems']],

    ['id'=>'wellvita','name'=>'Wellvita','div'=>'main','cat'=>'Vitamins & Nutrition','form'=>'Syrup',
     'comp'=>'Lycopene + Zinc Sulphate + Vitamin B1, B2, B6, B12 + Niacinamide + Lysine Hydrochloride',
     'image'=>'web/product/main/9.png',
     'summary'=>'A multivitamin, antioxidant and appetite-enhancing syrup that supports recovery, growth and overall health.',
     'benefits'=>['General immunity booster: lycopene and zinc improve the immune response, especially for people prone to frequent infections, colds and flu','Appetite stimulant and growth promoter: lysine increases appetite, particularly in children, the elderly and patients recovering from illness','Management of vitamin deficiencies: B-complex vitamins (B1, B2, B6, B12, niacinamide) cover major B-vitamin deficiencies','Anemia support: Vitamin B12 and B6 help in the synthesis of healthy red blood cells','Skin and hair health: niacinamide and Vitamin B2 support skin texture and hair growth','Post-illness recovery: a nutritional boost after fevers, infections, surgeries or trauma','Antioxidant support: lycopene neutralizes free radicals','A supportive supplement, not a treatment for serious diseases on its own'],
     'uses'=>['Convalescence (recovery after illness or surgery)','Malnutrition and undernutrition','Vitamin B-complex deficiency','Weak immune system','Loss of appetite, especially in children and the elderly','Failure to thrive (low growth rate in children)','Mild anemia','Chronic fatigue','Skin disorders linked to deficiency, such as pellagra and dermatitis','Hair fall linked to nutritional deficiency']],

    ['id'=>'wellvita-9g','name'=>'Wellvita 9G','div'=>'main','cat'=>'Heart & Antioxidants','form'=>'Capsules',
     'comp'=>'Omega-3, Garlic, Grape Seed Extract, Ginkgo Biloba, Green Tea, Ginger, vitamins and minerals',
     'image'=>'web/product/main/7.png',
     'summary'=>'A multi-ingredient nutritional supplement for heart, brain and immune health.',
     'benefits'=>['Heart health: omega-3, garlic and grape seed extract support healthy cholesterol and blood pressure','Brain and cognitive health: Ginkgo Biloba enhances memory, focus and mental alertness, especially in the elderly','Immunity boost: green tea, ginger, vitamins and minerals improve the body’s defense against infections','Antioxidant defense: grape seed, green tea and omega-3 protect cells from free radical damage','Anti-inflammatory action: omega-3 and ginger help reduce inflammation','Weight management and metabolism: green tea extract supports fat burning','Digestive health: ginger improves digestion, reduces gas and bloating, and helps with nausea'],
     'uses'=>['Memory loss and cognitive decline (supportive care)','Weak immune system','Premature aging','Joint inflammation, including rheumatoid arthritis and osteoarthritis','Poor digestion and gastrointestinal issues']],

    ['id'=>'benfonext','name'=>'Benfonext','div'=>'main','cat'=>'Neuro & Pain Care','form'=>'Softgel capsules',
     'comp'=>'Methylcobalamin + Alpha Lipoic Acid + Inositol + Folic Acid + Chromium Polynicotinate + Selenium Dioxide Monohydrate + Benfotiamine',
     'image'=>'web/product/main/3.png',
     'summary'=>'A neuro-nutritional formulation for nerve health and relief from nerve-related symptoms.',
     'benefits'=>['Neuroprotection: supports regeneration of damaged nerves and improves nerve conduction','Antioxidant support: Alpha Lipoic Acid and Selenium reduce oxidative stress in diabetes and aging','Improves glucose metabolism: Chromium helps with better insulin sensitivity','Folic acid and Vitamin B12 help correct deficiencies and support red blood cell formation'],
     'uses'=>['Diabetic neuropathy: relief from burning feet, tingling, numbness and nerve pain','Peripheral neuropathy: alcohol-induced, chemotherapy-induced or related to nutritional deficiency','Megaloblastic anemia due to folic acid and Vitamin B12 deficiency','Neurological disorders: nerve degeneration, neuropathic pain and neuralgia','Chronic fatigue and weakness, especially in the elderly and long-term illness','Sciatica and nerve compression syndromes']],

    // Added from the pack photo (AZOFF PLUS). Not in the Excel sheet - client to verify details.
    ['id'=>'azoff-plus','name'=>'Azoff Plus','div'=>'main','cat'=>'Anti-Infectives','form'=>'Tablets',
     'comp'=>'Ofloxacin + Ornidazole + Lactic Acid Bacillus',
     'image'=>'web/product/main/2.png',
     'summary'=>'An antibiotic and anti-protozoal combination with lactic acid bacillus, used for gastrointestinal infections.',
     'benefits'=>['Ofloxacin is an antibiotic that acts against a broad range of bacteria','Ornidazole acts against anaerobic bacteria and protozoa such as amoeba and giardia','Lactic Acid Bacillus helps restore the beneficial bacteria of the gut'],
     'uses'=>['Infectious diarrhea and dysentery','Amoebic and bacterial intestinal infections','Mixed gastrointestinal infections']],

    /* ===================== OPG DIVISION ===================== */
    ['id'=>'collvit','name'=>'Collvit','div'=>'opg','cat'=>'Heart & Antioxidants','form'=>'Nutritional supplement',
     'comp'=>'Coenzyme Q10 + Lycopene + L-Carnitine + Omega-3 Fatty Acids + L-Arginine + Sodium Selenite',
     'image'=>'',
     'summary'=>'Commonly used for cardiovascular health, antioxidant support and metabolic function.',
     'benefits'=>['Coenzyme Q10 boosts energy and protects cells','Lycopene helps protect cells and supports heart health','L-Carnitine aids in fat burning and exercise recovery','Omega-3 fatty acids support heart and brain health, and L-Arginine improves blood flow','Sodium Selenite acts as an antioxidant and strengthens the immune system','Together they promote better energy, heart health and general well-being'],
     'uses'=>['Cardiovascular health support','Antioxidant support','Metabolic function support','Energy and general well-being']],

    ['id'=>'ferroz','name'=>'Ferroz 200/300','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Antibiotic',
     'comp'=>'Faropenem',
     'image'=>'web/product/new/ferozz.jpeg',
     'summary'=>'An antibiotic used primarily for treating bacterial infections, available in different strengths.',
     'benefits'=>['Faropenem is an antibiotic. It treats bacterial infections and is not used for vitamin or mineral deficiencies','Available in different strengths to accommodate various treatment needs'],
     'uses'=>['Respiratory tract infections, such as pneumonia and bronchitis','Urinary tract infections, such as cystitis and pyelonephritis','Skin and soft tissue infections','Sinusitis','Otitis media (middle ear infections)']],

    ['id'=>'azirol-d3','name'=>'Azirol D3','div'=>'opg','cat'=>'Bone Health','form'=>'Softgel capsules',
     'comp'=>'Cholecalciferol (Vitamin D3) 60000 IU',
     'image'=>'web/product/OPG/2.png',
     'summary'=>'Vitamin D3 helps the body absorb calcium and supports bone health.',
     'benefits'=>['Cholecalciferol (Vitamin D3) improves calcium absorption and supports strong bones'],
     'uses'=>['Vitamin D deficiency and insufficiency: low levels of vitamin D in the body','Calcium deficiency: vitamin D helps with calcium absorption','Osteoporosis: weakened bones due to insufficient vitamin D and calcium','Rickets: a condition in children causing weak, soft bones','Osteomalacia: softening of the bones in adults','Hypoparathyroidism: to help manage low calcium levels in the blood']],

    ['id'=>'ausam-400','name'=>'Ausam-400','div'=>'opg','cat'=>'Vitamins & Nutrition','form'=>'Supplement',
     'comp'=>'S-Adenosyl-L-Methionine (SAMe)',
     'image'=>'web/product/new/ausam 400.jpeg',
     'summary'=>'SAMe is a compound naturally present in the body that plays a role in many biological processes.',
     'benefits'=>['SAMe plays a role in the synthesis of neurotransmitters and the regulation of gene expression','Mood and mental health: helps improve depression symptoms','Liver health: promotes liver repair and detoxification','Osteoarthritis: reduces joint pain and inflammation','Cognitive function: may support cognitive health, especially with age'],
     'uses'=>['Depression: to improve mood and emotional well-being','Liver health: to support liver function and repair','Osteoarthritis: to reduce joint pain and inflammation','Cognitive health with age']],

    ['id'=>'tamzil-04','name'=>'Tamzil-0.4','div'=>'opg','cat'=>'Urology','form'=>'Tablets',
     'comp'=>'Tamsulosin HCl 0.4 mg + Dutasteride',
     'image'=>'',
     'summary'=>'A combined tablet used to treat an enlarged prostate.',
     'benefits'=>['Tamsulosin HCl relaxes prostate and bladder muscles to improve urine flow','Dutasteride reduces prostate size by blocking growth hormones','Relieves urinary symptoms such as difficulty urinating and frequent urination'],
     'uses'=>['Benign Prostatic Hyperplasia (BPH): enlarged prostate','Lower Urinary Tract Symptoms (LUTS)','Urinary retention','Prostate-related disorders']],

    ['id'=>'itoron','name'=>'Itoron-100/200','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Antifungal',
     'comp'=>'Antifungal formulation (100 / 200 strengths)',
     'image'=>'web/product/new/itoron.jpeg',
     'summary'=>'Treats systemic and localized fungal infections caused by susceptible fungi.',
     'benefits'=>['Acts against a range of fungal infections, from skin and nails to infections of the lungs and body'],
     'uses'=>['Aspergillosis: lung infections caused by Aspergillus fungi','Blastomycosis: a rare fungal infection of the lungs','Histoplasmosis: a fungal infection primarily affecting the lungs','Candidiasis: yeast infections of the mouth, throat, skin or other parts of the body','Tinea infections: ringworm, athlete’s foot and jock itch','Onychomycosis: fungal infections of the nails','Cryptococcosis: fungal meningitis or lung infection','Sporotrichosis: a fungal infection of the skin']],

    ['id'=>'mupron','name'=>'Mupron','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Topical (ointment)',
     'comp'=>'Mupirocin',
     'image'=>'web/product/new/mupron.jpeg',
     'summary'=>'A topical antibiotic used to treat bacterial skin infections.',
     'benefits'=>['Treats skin infections caused by certain bacteria and prevents or treats bacterial contamination of wounds','Nasal decolonization: reduces the risk of infection in people who carry Staphylococcus aureus in their nostrils, especially before surgery'],
     'uses'=>['Impetigo: a contagious bacterial skin infection that causes red sores','Folliculitis: infection and inflammation of hair follicles','Secondary infected wounds: small cuts, abrasions or surgical wounds that have become infected','Furunculosis: boils or deep infections in hair follicles','MRSA colonization: nasal decolonization in hospital and surgical settings','Ecthyma: a deeper skin infection similar to impetigo']],

    ['id'=>'luliaz','name'=>'Luliaz','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Cream (10 gm / 20 gm / 30 gm)',
     'comp'=>'Luliconazole',
     'image'=>'web/product/new/luliaz.jpeg',
     'summary'=>'An antifungal cream for fungal skin infections caused by dermatophytes.',
     'benefits'=>['Effective against fungal skin infections caused by dermatophytes (Trichophyton rubrum and Epidermophyton floccosum)'],
     'uses'=>['Tinea corporis: ringworm of the body, with red, scaly, itchy circular patches','Tinea cruris: jock itch, an infection in the groin area','Tinea pedis: athlete’s foot, affecting the skin between the toes and on the feet','Tinea faciei: fungal infection of the face (less common)']],

    ['id'=>'rabizem-iv','name'=>'Rabizem IV','div'=>'opg','cat'=>'Gastro & Liver Care','form'=>'Gastro-resistant tablets',
     'comp'=>'Rabeprazole Sodium 20 mg',
     'image'=>'web/product/OPG/4.png',
     'summary'=>'A proton pump inhibitor (PPI) used for conditions related to excess stomach acid.',
     'benefits'=>['Rabeprazole is a proton pump inhibitor (PPI) that works by reducing the amount of acid produced in the stomach'],
     'uses'=>['GERD: stomach acid frequently flows back into the esophagus, causing heartburn, chest pain and difficulty swallowing','Peptic ulcers: ulcers in the stomach or small intestine, often caused by excess acid or H. pylori infection','H. pylori infection: in combination with antibiotics, helps eradicate the bacteria','Zollinger-Ellison syndrome: tumors cause excessive stomach acid production','Erosive esophagitis: inflammation and damage to the esophagus from stomach acid']],

    ['id'=>'rabizem-d','name'=>'Rabizem-D','div'=>'opg','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Rabeprazole + Domperidone',
     'image'=>'',
     'summary'=>'A combination that reduces stomach acid, improves gut motility and prevents nausea.',
     'benefits'=>['Rabeprazole is a proton pump inhibitor (PPI) that reduces stomach acid production','Domperidone is an antiemetic and prokinetic agent that improves gut motility and reduces nausea'],
     'uses'=>['Gastroesophageal Reflux Disease (GERD)','Peptic Ulcer Disease: ulcers in the stomach or duodenum, often linked to H. pylori infection or NSAID use','Zollinger-Ellison syndrome','Gastroparesis: delayed stomach emptying causing nausea, vomiting and fullness','Nausea and vomiting associated with gastrointestinal disorders or medication side effects','Esophagitis: inflammation of the esophagus due to acid reflux']],

    // Added from the pack photo (RABIZEM LV). Not in the Excel sheet - client to verify details.
    ['id'=>'rabizem-lv','name'=>'Rabizem-LV','div'=>'opg','cat'=>'Gastro & Liver Care','form'=>'Capsules (EC / SR)',
     'comp'=>'Rabeprazole Sodium (EC) + Levosulpiride (Sustained Release)',
     'image'=>'web/product/OPG/5.png',
     'summary'=>'A combination that reduces stomach acid and improves stomach movement, used for reflux and dyspepsia.',
     'benefits'=>['Rabeprazole is a proton pump inhibitor (PPI) that reduces stomach acid','Levosulpiride is a prokinetic that improves gut motility and reduces nausea and bloating'],
     'uses'=>['Gastroesophageal Reflux Disease (GERD)','Functional (non-ulcer) dyspepsia','Gastroparesis','Bloating, nausea and early fullness after meals']],

    // Added from the pack photo (AZICARE 300 SR). Not in the Excel sheet - client to verify details.
    ['id'=>'azicare-300-sr','name'=>'Azicare-300 SR','div'=>'opg','cat'=>'Women’s Health','form'=>'Sustained release tablets',
     'comp'=>'Progesterone 300 mg (Sustained Release)',
     'image'=>'web/product/OPG/1.png',
     'summary'=>'Sustained release progesterone used for hormonal support in women, as advised by a physician.',
     'benefits'=>['Progesterone is a natural female hormone that supports the uterine lining and pregnancy','Sustained release formulation provides steady hormone levels'],
     'uses'=>['Luteal phase support','Threatened or recurrent miscarriage, as advised by a physician','Menstrual irregularities and absent periods due to low progesterone','Hormonal support as prescribed by a physician']],

    ['id'=>'reenef','name'=>'Reenef','div'=>'opg','cat'=>'Vitamins & Nutrition','form'=>'Renal nutrition',
     'comp'=>'Alpha-ketoanalogues + Essential Amino Acids',
     'image'=>'web/product/new/rennef.jpeg',
     'summary'=>'Used in chronic kidney disease and protein metabolism disorders. Supports patients on low-protein diets.',
     'benefits'=>['Reduction of uremic toxins: minimizes nitrogenous waste in patients with chronic kidney disease (CKD)','Support for low-protein diets: ensures essential amino acid availability while reducing dietary nitrogen load','Improved nutritional status: prevents malnutrition and maintains a positive nitrogen balance','Delayed progression of CKD: may help preserve kidney function and delay the need for dialysis','Enhanced protein utilization: alpha-ketoanalogues are converted into amino acids, minimizing urea formation','Improved quality of life: reduced fatigue and better physical function'],
     'uses'=>['Chronic Kidney Disease (CKD): reduces nitrogen waste, delays dialysis and supports nutrition','End-Stage Renal Disease (ESRD): replenishes nutrients during dialysis','Liver diseases: lowers ammonia levels and supports liver regeneration','Protein-Energy Wasting: prevents muscle wasting','Metabolic disorders such as MSUD and PKU','Diabetes with nephropathy','Surgical recovery: promotes tissue repair','Elderly care: helps prevent sarcopenia','Critical illness: provides essential nutrients in organ dysfunction']],

    ['id'=>'nortiplex','name'=>'Nortiplex','div'=>'opg','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Pregabalin + Methylcobalamin 1500 mcg + Nortriptyline 10 mg',
     'image'=>'',
     'summary'=>'Used for the management of neuropathic pain and related conditions.',
     'benefits'=>['Pregabalin helps reduce anxiety symptoms and widespread nerve and musculoskeletal pain, and improves sleep quality','Methylcobalamin replenishes Vitamin B12 to support nerve health and red blood cell production','Nortriptyline, a tricyclic antidepressant, helps manage pain-related mood disorders','Addresses nerve-related pain, enhances nerve repair and improves quality of life'],
     'uses'=>['Diabetic neuropathy: nerve damage due to long-term high blood sugar','Post-herpetic neuralgia: persistent nerve pain after shingles','Fibromyalgia','Peripheral neuropathy: nerve damage caused by diabetes, Vitamin B12 deficiency or other factors','Trigeminal neuralgia','Chronic back or neck pain with nerve involvement (radiculopathy)','Sciatica','Carpal tunnel syndrome','Anxiety disorders and depression linked to chronic pain','Sleep problems due to pain-induced insomnia','Vitamin B12 deficiency-associated neuropathy']],

    ['id'=>'prigomax','name'=>'Prigomax','div'=>'opg','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Pregabalin + Methylcobalamin 750 mcg',
     'image'=>'',
     'summary'=>'Used for nerve pain and Vitamin B12-related nerve health.',
     'benefits'=>['Pregabalin is effective in treating nerve pain caused by diabetes, shingles or spinal cord injuries, and also helps in generalized anxiety disorder','Methylcobalamin is a form of Vitamin B12, essential for nerve function and red blood cell production','Methylcobalamin may help support nerve regeneration and improve nerve health'],
     'uses'=>['Neuropathy: diabetic neuropathy and post-herpetic neuralgia','Neuropathic pain','Generalized Anxiety Disorder (GAD)','Fibromyalgia: muscle and soft tissue pain','Vitamin B12 deficiency: weakness, fatigue and nerve damage','Nerve regeneration support']],

    ['id'=>'hairovit-forte','name'=>'Hairovit Forte','div'=>'opg','cat'=>'Vitamins & Nutrition','form'=>'Tablets',
     'comp'=>'Biotin + Calcium Pantothenate (Vitamin B5) + DL-Methionine + multivitamins and minerals',
     'image'=>'',
     'summary'=>'A hair, skin and nail nutrition formulation with general multivitamin and mineral support.',
     'benefits'=>['Hair health: biotin supports healthy hair growth and helps in hair loss or thinning','Calcium Pantothenate (Vitamin B5) is essential for hair health and may help prevent hair loss','Skin health: biotin and calcium pantothenate promote smoother skin','Nail strength: biotin helps improve nail strength and prevents brittleness','Liver and detoxification: DL-Methionine supports liver function','Metabolism and antioxidant support from multivitamins and minerals'],
     'uses'=>['Biotin deficiency: hair loss, brittle nails and skin rashes','Pantothenic acid (Vitamin B5) deficiency: fatigue, irritability, digestive issues and hair loss','Methionine deficiency: liver problems, skin disorders and muscle weakness','General multivitamin and mineral deficiencies','Hair, skin and nail health']],

    ['id'=>'loroz-10','name'=>'Loroz-10','div'=>'opg','cat'=>'Allergy & Respiratory','form'=>'Tablets',
     'comp'=>'Loratadine 10 mg',
     'image'=>'',
     'summary'=>'A second-generation antihistamine that relieves allergy symptoms without causing significant drowsiness.',
     'benefits'=>['Blocks the effects of histamine to relieve allergy symptoms','Used for allergic conditions only. It does not treat infections or other non-allergic diseases'],
     'uses'=>['Allergic rhinitis (hay fever): sneezing, runny nose and itchy eyes caused by pollen, dust or pet dander','Urticaria (hives): itching, redness and swelling','Seasonal allergies: itchy throat, cough and congestion']],

    ['id'=>'azitrip-forte','name'=>'Azitrip-Forte','div'=>'opg','cat'=>'Neuro & Pain Care','form'=>'Enzyme therapy',
     'comp'=>'Proteolytic enzyme combination',
     'image'=>'',
     'summary'=>'An enzyme combination used to reduce swelling and inflammation and to support healing.',
     'benefits'=>['Reduces edema, pain and inflammation, helping faster recovery after surgery','Promotes quicker wound healing by removing dead tissue and enhancing tissue repair','Helps liquefy mucus and reduce inflammation in the airways'],
     'uses'=>['Post-operative edema and inflammation: after general, orthopedic, dental or eye surgeries','Traumatic injuries: fractures, sprains, strains, sports injuries and hematomas','Wound healing','ENT disorders: tonsillitis, sinusitis and pharyngitis','Dental conditions: post-extraction swelling and oral infections','Respiratory conditions: bronchitis and emphysema','Ophthalmic conditions: post-cataract surgery swelling and traumatic eye injuries (supportive therapy)','Arthritis and joint inflammation']],

    // OPG Sl. 17 has no brand name in the spreadsheet. Add the name, then remove 'hidden'.
    ['id'=>'opg-17','hidden'=>true,'name'=>'NAME TO BE CONFIRMED','div'=>'opg','cat'=>'Anti-Infectives','form'=>'Oral gel / throat care',
     'comp'=>'Choline Salicylate + Lignocaine Hydrochloride + Benzalkonium Chloride','image'=>'',
     'summary'=>'For pain, inflammation and infection in the mouth, gums and throat.',
     'benefits'=>['Choline Salicylate reduces pain and inflammation','Lignocaine numbs the area, relieving pain from mouth sores, gums or throat irritation','Benzalkonium Chloride is an antiseptic that helps kill bacteria and prevent infection'],
     'uses'=>['Mouth ulcers','Sore throat','Gingivitis','Mouth and throat infections']],

    /* ===================== USR DIVISION ===================== */
    ['id'=>'peracit','name'=>'Peracit','div'=>'usr','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Citicoline + Piracetam',
     'image'=>'web/product/USR/5.png',
     'summary'=>'Supports brain recovery, memory, focus and cognitive function.',
     'benefits'=>['Stroke recovery: helps repair brain cells and improve function after a stroke','Memory and learning: boosts memory, recall and learning ability','Focus and concentration: enhances attention','Brain injury recovery: aids healing after head injuries','Mental fatigue: reduces brain fog and improves mental clarity','Better blood flow in the brain: increases oxygen supply to brain cells','Eye health: protects optic nerves'],
     'uses'=>['Stroke (ischemic and hemorrhagic): brain recovery, speech, memory and movement','Traumatic Brain Injury (TBI) and concussion','Dementia and Alzheimer’s disease: slows down memory loss and cognitive decline','Parkinson’s disease: supports movement control','ADHD: enhances focus and attention','Depression and anxiety: supports mood and emotional balance','Age-related cognitive decline (mild cognitive impairment)','Glaucoma and optic neuropathy: protects the optic nerve','Vertigo and dizziness']],

    ['id'=>'citicure','name'=>'Citicure','div'=>'usr','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Neuro-care formulation',
     'image'=>'',
     'summary'=>'Helps repair brain cells and supports memory, learning and recovery after stroke or head injury.',
     'benefits'=>['Brain repair: helps heal brain cells after a stroke or injury','Memory and learning: improves memory, focus and learning','Mental fatigue: reduces brain fog and tiredness','Mood support: can help with mood and motivation','Eye health: protects nerves in the eye'],
     'uses'=>['Stroke: promotes brain cell repair, improving movement, speech and memory','Traumatic Brain Injury (TBI): reduces brain damage and speeds up recovery','Dementia and Alzheimer’s disease: protects brain cells and slows cognitive decline','Parkinson’s disease: supports dopamine production and movement control','ADHD: increases attention span and mental clarity','Mental fatigue and brain fog','Glaucoma and optic neuropathy: protects the optic nerve']],

    ['id'=>'evocod','name'=>'Evocod','div'=>'usr','cat'=>'Heart & Antioxidants','form'=>'Softgel capsules',
     'comp'=>'Vitamin E + Cod Liver Oil',
     'image'=>'',
     'summary'=>'Combines the antioxidant action of Vitamin E with the omega-3 fatty acids and Vitamin D of cod liver oil.',
     'benefits'=>['Boosts immunity: Vitamin E protects cells and supports the immune system','Healthy skin and eyes: Vitamin E keeps skin healthy and helps protect against eye problems like cataracts','Heart health: cod liver oil omega-3s support healthy cholesterol levels and reduce inflammation','Brain health: Vitamin E protects brain cells, and omega-3s improve brain function','Bone and joint health: cod liver oil is rich in Vitamin D, which supports strong bones and reduces joint pain','Reduces inflammation, useful in conditions like arthritis'],
     'uses'=>['Arthritis and joint pain: cod liver oil reduces joint inflammation','Skin conditions: eczema, acne and sun damage','Eye disorders: age-related problems such as cataracts and macular degeneration','Cognitive decline','Bone diseases such as osteoporosis','Immune deficiency, especially in older adults']],

    ['id'=>'ceribro','name'=>'Ceribro','div'=>'usr','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Cerebroprotein Hydrolysate 90 mg',
     'image'=>'web/product/OPG/3.png',
     'summary'=>'Supports brain function, protects nerve cells and aids neurological recovery.',
     'benefits'=>['Improves brain function: enhances memory, attention and learning','Protects nerve cells: guards against damage from injury or neurodegeneration','Aids stroke recovery: helps regain motor and cognitive functions','Supports nerve regeneration: encourages healing of damaged nerve cells','Boosts neuroplasticity: enhances the brain’s ability to form new neural connections'],
     'uses'=>['Cognitive impairment: Alzheimer’s disease, mild cognitive impairment and other neurodegenerative disorders','Stroke recovery: post-stroke rehabilitation of motor and cognitive functions','Neurodegenerative diseases such as Parkinson’s disease','Traumatic Brain Injury (TBI): supports neuronal recovery']],

    ['id'=>'carnicure','name'=>'Carnicure','div'=>'usr','cat'=>'Vitamins & Nutrition','form'=>'Supplement',
     'comp'=>'Levocarnitine (L-Carnitine)',
     'image'=>'',
     'summary'=>'Supports energy production, heart function and fat metabolism.',
     'benefits'=>['Helps in cases where the body lacks sufficient carnitine, leading to fatigue and muscle weakness','Supports patients undergoing dialysis who may develop carnitine deficiency','Assists in energy production in the heart','Supports fat metabolism'],
     'uses'=>['Carnitine deficiency: primary (genetic) or secondary (due to other diseases)','Chronic Kidney Disease (CKD): patients undergoing dialysis','Heart conditions: supports heart cell energy in heart failure','Fatigue and muscle weakness: myopathies or fibromyalgia','Weight management: supports fat metabolism']],

    ['id'=>'usq-10','name'=>'USQ 10','div'=>'usr','cat'=>'Heart & Antioxidants','form'=>'Capsules',
     'comp'=>'Coenzyme Q10 100 mg + EPA 90 mg + DHA 60 mg + Lycopene 4000 mcg + Selenium 70 mcg',
     'image'=>'web/product/USR/7.png',
     'summary'=>'An antioxidant and omega-3 combination for heart, brain and immune health.',
     'benefits'=>['Coenzyme Q10 (100 mg): supports energy production in heart cells, helps improve heart function and may reduce statin-related muscle pain','EPA (90 mg) and DHA (60 mg): omega-3 fatty acids that support heart health by lowering triglycerides, support brain function and help stabilize mood','Lycopene (4000 mcg): a powerful antioxidant that helps reduce oxidative stress and supports heart health','Selenium (70 mcg): protects cells from oxidative damage, supports the immune system and is crucial for thyroid function'],
     'uses'=>['Cardiovascular health: supports heart function, blood pressure, cholesterol and circulation','Cognitive decline: supports brain health','Immune support','Inflammation-related disorders such as arthritis','Muscle and energy support','Mood support']],

    ['id'=>'pancowell','name'=>'Pancowell','div'=>'usr','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Pancreatin 192 mg + Bile Constituents 25 mg + Activated Dimethicone 40 mg',
     'image'=>'web/product/USR/4.png',
     'summary'=>'A digestive combination that helps break down food and reduces gas and bloating.',
     'benefits'=>['Pancreatin (192 mg): helps break down fats, proteins and carbohydrates for better digestion','Bile constituents (25 mg): bile salts aid in the digestion and absorption of fats','Activated dimethicone (40 mg): an anti-foaming agent that reduces gas and bloating'],
     'uses'=>['Pancreatic insufficiency: chronic pancreatitis, cystic fibrosis or after pancreatic surgery','Gallbladder removal (cholecystectomy): aids fat digestion in the absence of a gallbladder','Indigestion and bloating, particularly with excess gas','Irritable bowel syndrome (IBS): bloating and gas']],

    ['id'=>'autowell','name'=>'Autowell','div'=>'usr','cat'=>'Anti-Infectives','form'=>'Tablets (250 mg / 500 mg)',
     'comp'=>'Cefuroxime Axetil',
     'image'=>'web/product/main/1.png',
     'summary'=>'A cephalosporin antibiotic used to treat a variety of bacterial infections.',
     'benefits'=>['Cefuroxime belongs to the cephalosporin class of antibiotics','Available in 250 mg and 500 mg tablets'],
     'uses'=>['Respiratory tract infections: pneumonia, acute bronchitis and acute bacterial sinusitis','Ear infections: acute otitis media, common in children','Urinary tract infections: cystitis and pyelonephritis','Skin and soft tissue infections: cellulitis and wound infections','Bone and joint infections: osteomyelitis and septic arthritis','Gonorrhea','Meningitis','Pre-surgical prophylaxis: to prevent infections during or after surgery']],

    ['id'=>'pointwell','name'=>'Pointwell','div'=>'usr','cat'=>'Allergy & Respiratory','form'=>'Tablets',
     'comp'=>'Montelukast Sodium 10 mg + Levocetirizine Dihydrochloride 5 mg',
     'image'=>'web/product/USR/3.png',
     'summary'=>'A combination used to treat allergic conditions, including allergic asthma.',
     'benefits'=>['Montelukast helps prevent asthma attacks by reducing inflammation in the airways and can prevent exercise-induced breathing difficulty','Levocetirizine relieves sneezing, itching, runny nose and watery eyes, and reduces itching and swelling from hives'],
     'uses'=>['Allergic rhinitis (hay fever): seasonal or perennial','Asthma, particularly allergic asthma','Exercise-induced bronchoconstriction','Chronic urticaria (hives)','Seasonal allergies and associated symptoms: sneezing, itching and nasal congestion','Other allergic reactions to dust, pollen, pet dander or insect stings']],

    ['id'=>'well-xt','name'=>'Well XT','div'=>'usr','cat'=>'Vitamins & Nutrition','form'=>'Supplement',
     'comp'=>'Ferrous Ascorbate 100 mg + Folic Acid 1.5 mg + Pyridoxine 10 mg + Benfotiamine 150 mg + Methylcobalamin 1500 mcg + Zinc + Vitamin D3',
     'image'=>'web/product/new/wellxt.jpeg',
     'summary'=>'A combination that addresses multiple nutritional deficiencies and supports blood, nerve, immune and bone health.',
     'benefits'=>['Ferrous ascorbate provides iron to treat anemia','Folic acid helps in red blood cell production and prevents folate deficiency anemia','Pyridoxine supports nerve function and metabolism','Benfotiamine (Vitamin B1) supports nerve function, especially in neuropathies','Methylcobalamin helps prevent or treat Vitamin B12 deficiency','Zinc supports immune health, wound healing and skin health','Vitamin D3 maintains bone health and supports the immune system'],
     'uses'=>['Iron deficiency anemia','Folic acid deficiency','Vitamin B6 deficiency','Neuropathy and nerve health, especially diabetic neuropathy','Vitamin B12 deficiency','Zinc deficiency','Vitamin D deficiency']],

    ['id'=>'carnicure-plus','name'=>'Carnicure Plus','div'=>'usr','cat'=>'Vitamins & Nutrition','form'=>'Tablets',
     'comp'=>'L-Carnitine L-Tartrate 500 mg + Methylcobalamin + Folic Acid 1.5 mg',
     'image'=>'web/product/USR/2.png',
     'summary'=>'Supports energy, nerve health and red blood cell production.',
     'benefits'=>['L-Carnitine helps improve energy production by aiding the transport of fatty acids','Methylcobalamin (a form of Vitamin B12) helps treat nerve damage and B12 deficiency','Folic acid supports red blood cell production and helps prevent folate deficiency anemia'],
     'uses'=>['Fatigue and low energy','Neuropathy (nerve damage), particularly diabetic neuropathy','Vitamin B12 deficiency: weakness, fatigue and numbness','Folic acid deficiency and megaloblastic anemia','Pregnancy: prevention of neural tube defects','Support for metabolic disorders affecting fat metabolism']],

    ['id'=>'usgaba-pg','name'=>'Usgaba PG','div'=>'usr','cat'=>'Neuro & Pain Care','form'=>'Tablets',
     'comp'=>'Pregabalin + Nortriptyline',
     'image'=>'',
     'summary'=>'Used for nerve pain, anxiety and depression, with improved sleep quality.',
     'benefits'=>['Pregabalin calms overactive nerve signals','Nortriptyline increases certain neurotransmitters in the brain to improve mood and pain perception','Can also improve sleep quality in pain-related sleep disturbances'],
     'uses'=>['Neuropathic pain: diabetic neuropathy, post-herpetic neuralgia and trigeminal neuralgia','Fibromyalgia: reduces pain and improves sleep quality','Generalized Anxiety Disorder (GAD)','Depression','Chronic pain linked to mood disorders or insomnia']],

    ['id'=>'rifazin-m','name'=>'Rifazin M','div'=>'usr','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Rifaximin + Metronidazole',
     'image'=>'',
     'summary'=>'Used for intestinal infections, diarrhea and abdominal infections caused by specific bacteria and protozoa.',
     'benefits'=>['Rifaximin is a broad-spectrum antibiotic effective against certain gastrointestinal bacteria','Metronidazole targets anaerobic bacteria and protozoa','Together they are effective against a wide range of gastrointestinal infections'],
     'uses'=>['Traveler’s diarrhea: diarrhea caused by bacterial infections like E. coli','Clostridium difficile infection','Intra-abdominal infections: peritonitis or abdominal abscesses caused by anaerobic bacteria','Giardiasis or amoebiasis: protozoal infections causing gastrointestinal issues','Small Intestinal Bacterial Overgrowth (SIBO)','Helicobacter pylori infection, as part of a combination regimen']],

    ['id'=>'rifazin-200-400','name'=>'Rifazin 200/400','div'=>'usr','cat'=>'Gastro & Liver Care','form'=>'Tablets',
     'comp'=>'Rifaximin',
     'image'=>'web/product/USR/6.png',
     'summary'=>'A gut-acting antibiotic available in different strengths.',
     'benefits'=>['Helps reduce confusion, sleepiness and shakiness in people with liver disease'],
     'uses'=>['Traveler’s diarrhea: diarrhea caused by bacteria when traveling','Hepatic encephalopathy: a brain condition that happens in people with liver disease','Irritable Bowel Syndrome with Diarrhea (IBS-D): belly pain, bloating and diarrhea','Small Intestinal Bacterial Overgrowth (SIBO)','Recurrent Clostridium difficile infection']],

    ['id'=>'calion-k2','name'=>'Calion K2','div'=>'usr','cat'=>'Bone Health','form'=>'Softgel capsules',
     'comp'=>'Calcium Carbonate 625 mg + Calcitriol 0.25 mcg + Vitamin K2-7 + Zinc 7.5 mg + Magnesium Sulphate 50 mg',
     'image'=>'web/product/USR/1.png',
     'summary'=>'A bone health combination of calcium, active Vitamin D, Vitamin K2, zinc and magnesium.',
     'benefits'=>['Calcitriol (0.25 mcg): the active form of Vitamin D, helps the body absorb calcium and keep bones strong','Calcium Carbonate (625 mg): a calcium supplement needed for strong bones and teeth','Vitamin K2: works with Vitamin D to move calcium into bones, helping prevent bone loss','Zinc (7.5 mg): supports bone growth and the immune system','Magnesium Sulphate (50 mg): helps calcium and Vitamin D absorption and supports muscles and nerves'],
     'uses'=>['Osteoporosis: to strengthen bones and prevent fractures','Calcium deficiency','Vitamin D deficiency','Bone health in postmenopausal women','Muscle function: prevents cramps','Bone pain or fractures','Chronic kidney disease, parathyroid problems and other bone mineral disorders']],
];

/* ---------- helpers ---------- */
function img_norm($s) { return strtolower(preg_replace('/\s+/', ' ', trim($s))); }

// Finds the image file even if capitals, extra spaces or folder case differ.
// Returns the real path, or null if the file does not exist.
function resolve_image($path) {
    $cur = dirname(__DIR__);
    $out = [];
    foreach (explode('/', $path) as $seg) {
        $hit = null;
        if (is_dir($cur)) {
            foreach (scandir($cur) as $f) {
                if ($f !== '.' && $f !== '..' && img_norm($f) === img_norm($seg)) { $hit = $f; break; }
            }
        }
        if ($hit === null) { return null; }
        $cur .= '/' . $hit;
        $out[] = $hit;
    }
    return is_file($cur) ? implode('/', $out) : null;
}

// Every product gets an image: its own photo if found, else a template image.
foreach ($products as $idx => &$p) {
    $found = !empty($p['image']) ? resolve_image($p['image']) : null;
    $p['image'] = $found ? $found : 'images/case-study-image-' . (($idx % 6) + 1) . '.jpg';
}
unset($p);

$products = array_values(array_filter($products, function ($p) { return empty($p['hidden']); }));

function product_url($p) {
    return $p['id'] . '.php';
}

function get_product($slug) {
    global $products;
    foreach ($products as $p) {
        if ($p['id'] === $slug) { return $p; }
    }
    return null;
}