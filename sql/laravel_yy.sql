-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 05:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_yy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogfaqs`
--

CREATE TABLE `blogfaqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subcategory_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `metatitle` varchar(600) DEFAULT NULL,
  `metakeyword` varchar(600) DEFAULT NULL,
  `metadescription` varchar(600) DEFAULT NULL,
  `views` varchar(255) NOT NULL DEFAULT '0',
  `likes` varchar(255) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `subcategory_id`, `user_id`, `name`, `slug`, `image`, `alt`, `description`, `metatitle`, `metakeyword`, `metadescription`, `views`, `likes`, `status`, `created_at`, `updated_at`) VALUES
(16, NULL, NULL, NULL, 'Demand for Yoga Instructors | Steps to Becoming a Yoga Instructor', 'demand-for-yoga-instructors-steps-to-becoming-a-yoga-instructor', '/upload/blog/6523cba80726eblog1.webp', 'Demand for Yoga Instructors', '<p>&zwj;&zwj;Are you passionate about yoga and want to share your knowledge and help others in their wellness journey? Becoming a yoga instructor might be the perfect path for you! In this article, we will explore the steps you need to take to become a certified yoga instructor and start teaching classes that inspire and transform lives.</p>\r\n\r\n<h2>The Demand for Yoga Instructors</h2>\r\n\r\n<p>Yoga has become increasingly popular in recent years, with more and more people realizing the physical, mental, and spiritual benefits it offers. As a result, the demand for qualified yoga instructors is on the rise. Yoga studios, fitness centers, and wellness retreats are constantly seeking skilled instructors to meet the growing demand. By becoming a yoga instructor, you not only get to pursue your passion but also have the opportunity to make a positive impact on the lives of others.</p>\r\n\r\n<h2>Steps to Becoming a Yoga Instructor</h2>\r\n\r\n<p>Becoming a yoga instructor requires dedication, commitment, and a genuine love for the practice. Here are the steps you need to take to embark on this fulfilling journey:</p>\r\n\r\n<h3>1. Choosing the Right Yoga Teacher Training Program</h3>\r\n\r\n<p>First and foremost, it&rsquo;s important to find a reputable&nbsp;<a href=\"https://nirvanayogaschoolindia.com/\">yoga teacher training</a>&nbsp;program. Look for programs that are accredited and have experienced instructors who align with your values and teaching style. A comprehensive training program will equip you with the knowledge and skills necessary to become an effective yoga instructor. During the training, you will dive deep into the philosophy and history of yoga, learn proper alignment and sequencing, and gain practical teaching experience. Research different programs and choose one that resonates with you.</p>\r\n\r\n<h3>2. The Importance of Yoga Certification</h3>\r\n\r\n<p>Once you complete your training, it&rsquo;s time to gain teaching experience. Offer free or donation-based classes to friends, family, or local community centers to start building your reputation and confidence. However, to establish yourself as a professional, consider obtaining a yoga alliance certification. This certification is recognized worldwide and demonstrates your commitment to excellence in teaching yoga. It not only enhances your credibility but also opens doors to teaching opportunities in various settings, including studios, gyms, corporate wellness programs, and private sessions.</p>\r\n\r\n<h3>3. Developing Your Yoga Teaching Skills</h3>\r\n\r\n<p>Becoming a skilled yoga instructor goes beyond completing a training program and obtaining certification. It requires continuous learning and development of your teaching skills. Attend workshops, seminars, and advanced training courses to deepen your understanding of yoga and refine your teaching techniques. Embrace feedback from students and fellow instructors to grow and evolve as a teacher. The more you invest in your own growth, the better equipped you will be to guide and inspire your students on their yoga journey.</p>\r\n\r\n<h3>4. Building a Yoga Instructor Brand</h3>\r\n\r\n<p>In today&rsquo;s digital age, it&rsquo;s essential to build an online presence and establish yourself as a yoga instructor. Create a professional website or blog where you can share your knowledge, experiences, and upcoming classes. Utilize social media platforms like Instagram and Facebook to connect with potential students and showcase your teaching style. Develop a unique brand that reflects your personality and values. Use high-quality images and engaging content to attract and retain followers. Building a strong online presence will not only help you reach a wider audience but also position you as an authority in the yoga community.</p>\r\n\r\n<h3>5. Marketing Yourself as a Yoga Instructor</h3>\r\n\r\n<p>To attract students and fill your classes, you need to effectively market yourself as a yoga instructor. Consider offering introductory specials or discounted packages to entice new students. Collaborate with local businesses or wellness centers to host workshops or events. Network with other health and wellness professionals to expand your reach and create mutually beneficial partnerships. Utilize online platforms like MindBody or ClassPass to list your classes and make it easy for students to find and book with you. Implement a strategic marketing plan to consistently promote your classes and services.</p>\r\n\r\n<h3>6. Finding Yoga Instructor Job Opportunities</h3>\r\n\r\n<p>While many yoga instructors choose to start their own studios or teach private sessions, there are also plenty of job opportunities available in established yoga studios, fitness centers, and wellness retreats. Keep an eye out for job postings on yoga-related websites, social media groups, and community bulletin boards. Attend yoga conferences and networking events to connect with studio owners and fellow instructors. Be proactive in seeking out teaching opportunities and don&rsquo;t be afraid to reach out and introduce yourself to potential employers. Building relationships within the yoga community can lead to valuable teaching opportunities.</p>\r\n\r\n<h3>7. Continuing Education for Yoga Instructors</h3>\r\n\r\n<p>As a yoga instructor, your learning journey never ends. Continuing education is crucial to stay updated with the latest trends, research, and teaching methodologies. Attend workshops and training programs to learn new styles of yoga, explore specialized areas such as prenatal or therapeutic yoga, and deepen your knowledge of anatomy and physiology. Pursue advanced certifications or become a mentor for new yoga instructors. By investing in your own education and growth, you will not only enhance your teaching skills but also inspire and motivate your students.</p>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p>Becoming a yoga instructor is a fulfilling and rewarding journey. It requires dedication, commitment, and a genuine passion for yoga. Start by choosing a reputable yoga teacher training program that aligns with your values and teaching style. Gain teaching experience and obtain a yoga alliance certification to establish yourself as a professional. Continuously develop your teaching skills, build your brand, and effectively market yourself as a yoga instructor. Seek out teaching opportunities and invest in continuing education to stay at the forefront of the yoga industry. By taking these steps, you will be well on your way to becoming a successful yoga instructor, inspiring others through the practice of yoga.</p>', 'Demand for Yoga Instructors | Steps to Becoming a Yoga Instructor', 'Demand for Yoga Instructors', '‍‍Are you passionate about yoga and want to share your knowledge and help others in their wellness journey? Becoming a yoga instructor might be the perfect path for you! In this article, we will explore the steps you need to take to become a certified yoga instructor and start teaching classes that inspire and transform lives.', '0', '0', 1, '2023-10-07 01:01:34', '2023-10-09 04:15:12'),
(17, NULL, NULL, NULL, 'Paschimottanasana: Benefits, Preparations, Steps, Mistakes', 'paschimottanasana-benefits-preparations-steps-mistakes', '/upload/blog/6523cc51135a0blog2.webp', 'Paschimottanasana', '<p>&zwj;Introducing the Paschimottanasana, a blissful yoga pose that will transport your body and mind to a place of deep relaxation. This seated forward bend is perfect for those seeking a therapeutic escape from the chaos of everyday life. In just a few minutes, this transformative asana can release tension in your back, hamstrings, and shoulders, while also calming the nervous system and soothing the mind.</p>\r\n\r\n<p>As you surrender into the gentle stretch, feel the energy flowing through your body, revitalizing and rejuvenating every cell. The Paschimottanasana, also known as the Seated Forward Bend, is a beautiful posture that promotes flexibility, improves digestion, and stimulates the abdominal organs.</p>\r\n\r\n<p>Whether you&rsquo;re a seasoned yogi or just beginning your yoga journey, the Paschimottanasana welcomes practitioners of all levels. So grab a mat, find a quiet space, and embrace the serenity and peace that this powerful pose offers. Join us as we explore the secrets and benefits of this timeless asana. Get ready to experience a new level of relaxation and wellness through the transformative practice of Paschimottanasana.</p>\r\n\r\n<h2>Benefits of Paschimottanasana</h2>\r\n\r\n<p>The Paschimottanasana, or Seated Forward Bend, offers a multitude of benefits for the mind, body, and spirit. Let&rsquo;s delve into the incredible advantages this asana provides.</p>\r\n\r\n<ol>\r\n	<li><strong>Improved Flexibility: </strong>Paschimottanasana stretches the entire posterior chain, including the spine, hamstrings, and calves. Regular practice gradually increases flexibility, allowing you to deepen the forward fold and experience a greater range of motion.</li>\r\n	<li><strong>Relief from Back Pain: </strong>Sitting for long periods can lead to tightness and discomfort in the lower back. Paschimottanasana helps alleviate back pain by stretching the muscles and ligaments in the back, promoting proper alignment and relieving tension.</li>\r\n	<li><strong>Enhanced Digestion: </strong>This asana stimulates the abdominal organs, including the liver, kidneys, and pancreas. The gentle compression and massage of these organs improve digestion, alleviate constipation, and promote overall digestive health.</li>\r\n	<li><strong>Calms the Nervous System: </strong>The forward bend in Paschimottanasana activates the parasympathetic nervous system, triggering the relaxation response. This helps reduce stress, anxiety, and fatigue, while promoting a sense of calm and tranquility.</li>\r\n	<li><strong>Soothes the Mind: </strong>As you fold forward in Paschimottanasana, the mind naturally turns inward. This introspective aspect of the pose helps quiet the mind, promote mindfulness, and cultivate a sense of inner peace.</li>\r\n</ol>\r\n\r\n<h3>Preparing for Paschimottanasana</h3>\r\n\r\n<p>Before diving into Paschimottanasana, it&rsquo;s essential to prepare your body and mind for this transformative pose. Follow these steps to ensure a safe and effective practice.</p>\r\n\r\n<ul>\r\n	<li>Warm-up: Begin with a gentle warm-up to prepare your body for the deeper stretches. Incorporate movements such as Cat-Cow, Sun Salutations, or gentle twists to awaken your spine and loosen up your muscles.</li>\r\n	<li>Loosen the Hamstrings: Tight hamstrings can make it challenging to fold forward comfortably. Prioritize hamstring stretches such as Standing Forward Bend (Uttanasana) or Downward-Facing Dog (Adho Mukha Svanasana) to gradually lengthen and release tension in the back of your legs.</li>\r\n	<li>Props: If you struggle to reach your toes or experience discomfort in the pose, consider using props. A yoga strap, folded blanket, or bolster can provide support, allowing you to maintain proper alignment and ease into the pose gradually.</li>\r\n</ul>\r\n\r\n<p>Remember, each body is unique, and it&rsquo;s important to listen to your body&rsquo;s limitations. Honor where you are in your practice and avoid pushing beyond your limits to prevent injury.</p>\r\n\r\n<h3>Step-by-step Guide to Performing Paschimottanasana</h3>\r\n\r\n<p>Now that you&rsquo;re prepared, it&rsquo;s time to explore the step-by-step process of performing Paschimottanasana. Follow these instructions to experience the full benefits of this rejuvenating pose.</p>\r\n\r\n<ul>\r\n	<li>Sit on your mat: Begin by sitting on your mat with your legs extended in front of you. Ensure your spine is straight, and your sit bones are grounded firmly on the mat.</li>\r\n	<li>Activate your legs: Engage your quadriceps and flex your feet, pressing your heels into the mat. This action helps to activate the leg muscles and protect the knees.</li>\r\n	<li>Inhale and lengthen: As you inhale, elongate your spine, lifting your chest and reaching the crown of your head towards the ceiling. Feel a gentle stretch along the front of your body.</li>\r\n	<li>Exhale and fold forward: On your exhale, initiate the forward fold from your hips, leading with your heart. Maintain a long spine as you fold, avoiding rounding your back.</li>\r\n	<li>Reach for your feet: Once you have reached your maximum forward fold, extend your arms forward and reach for your feet. If you can&rsquo;t reach your feet comfortably, use a strap or hold onto your ankles or shins.</li>\r\n	<li>Relax into the pose: As you hold the forward fold, allow your body to relax and surrender. Soften your shoulders, jaw, and face. Release any tension you may be holding in your body.</li>\r\n	<li>Breathe deeply: Take slow, deep breaths while in the pose. With each inhale, imagine lengthening your spine, and with each exhale, surrendering deeper into the stretch.</li>\r\n	<li>Hold the pose: Stay in Paschimottanasana for 5-10 breaths or longer, depending on your comfort level. Remember to listen to your body and adjust the intensity of the stretch accordingly.</li>\r\n	<li>Release the pose: To come out of the pose, slowly release your grip on your feet and inhale as you lengthen your spine. On your exhale, gently return to an upright seated position.</li>\r\n</ul>\r\n\r\n<h3>Common Mistakes and How to Avoid Them in Paschimottanasana</h3>\r\n\r\n<p>While Paschimottanasana offers numerous benefits, it&rsquo;s crucial to practice with proper alignment to avoid strain or injury. Here are some common mistakes to be aware of and how to avoid them.</p>\r\n\r\n<ul>\r\n	<li>Rounding the back: One of the most common mistakes in Paschimottanasana is rounding the back. This can strain the spine and limit the effectiveness of the pose. Instead, focus on maintaining a long spine, hinging from the hips, and leading with your heart as you fold forward.</li>\r\n	<li>Forcing the stretch: It&rsquo;s important to avoid forcing your body into a deep fold. Pushing beyond your limits can lead to injury or strain. Instead, practice patience and allow your body to gradually open up over time. Use props to support your body and maintain a safe range of motion.</li>\r\n	<li>Tension in the neck and shoulders: Many practitioners tend to hold tension in the neck and shoulders during Paschimottanasana. To avoid this, consciously relax your shoulders away from your ears and release any tension in your neck. Focus on softening these areas as you fold forward.</li>\r\n</ul>\r\n\r\n<p>Remember, yoga is a journey, and progress comes with consistent practice and mindfulness. Embrace the process and be gentle with yourself as you explore Paschimottanasana.</p>\r\n\r\n<h3>Modifications and Variations</h3>\r\n\r\n<p>Paschimottanasana can be modified and adapted to accommodate practitioners of all levels. Here are a few variations to explore based on your individual needs and abilities.</p>\r\n\r\n<ul>\r\n	<li>Bent Knee Variation: If you have tight hamstrings or lower back issues, try practicing Paschimottanasana with bent knees. This modification helps reduce strain on the lower back and allows you to focus on the forward fold without compromising your comfort.</li>\r\n	<li>Supported Variation: For those who struggle to reach their feet comfortably, utilize props to support your practice. Place a bolster or folded blanket on your legs and rest your forearms or hands on the prop. This modification provides extra support and allows for a more relaxed forward fold.</li>\r\n	<li>One-leg Variation: If you&rsquo;re looking to deepen the stretch in one leg at a time, try the one-leg variation of Paschimottanasana. Extend one leg forward while bending the other knee, placing the sole of the foot against the inner thigh of the extended leg. Fold forward over the extended leg, focusing on the stretch in that specific hamstring.</li>\r\n</ul>\r\n\r\n<p>Always listen to your body and choose the variation that feels right for you. Don&rsquo;t hesitate to seek guidance from a qualified yoga teacher to ensure proper alignment and modifications tailored to your needs.</p>\r\n\r\n<h3>Tips for Improving Flexibility in Paschimottanasana</h3>\r\n\r\n<p>Flexibility is a key aspect of Paschimottanasana, and with consistent practice, you can gradually deepen your forward fold. Here are some tips to help improve your flexibility in this rejuvenating pose.</p>\r\n\r\n<ul>\r\n	<li>Practice regularly: Consistency is key when it comes to improving flexibility. Dedicate regular time to Paschimottanasana, whether it&rsquo;s a few minutes every day or longer sessions a few times a week. With time, you&rsquo;ll notice significant progress.</li>\r\n	<li>Warm-up: Prior to practicing Paschimottanasana, incorporate a dynamic warm-up routine to prepare your body for deeper stretches. Engage in movements that target the spine, hamstrings, and hips to increase blood flow and warm up the muscles.</li>\r\n	<li>Use props: Props such as blocks, straps, or blankets can assist in improving flexibility. Utilize blocks under your hands or a strap around your feet to gradually deepen your forward fold. These props provide support and help you maintain proper alignment as you work on your flexibility.</li>\r\n	<li>Engage in complementary exercises: In addition to regular yoga practice, consider incorporating exercises that specifically target the hamstrings and lower back. Pilates, swimming, or specific stretching routines can aid in improving overall flexibility, making Paschimottanasana more accessible.</li>\r\n</ul>\r\n\r\n<p>Remember, progress takes time, so be patient with yourself. Celebrate small improvements along the way and enjoy the journey toward increased flexibility.</p>\r\n\r\n<h3>Precautions and Contraindications&nbsp;</h3>\r\n\r\n<p>While Paschimottanasana offers numerous benefits, it may not be suitable for everyone. It&rsquo;s important to be aware of any contraindications or safety precautions before practicing this asana. If you have any underlying health conditions or injuries, consult with a healthcare professional or yoga teacher before attempting Paschimottanasana.</p>\r\n\r\n<ul>\r\n	<li>Back injuries: If you have a current or past back injury, approach Paschimottanasana with caution. Work with a knowledgeable yoga teacher to modify the pose according to your specific condition and avoid any movements that aggravate your injury.</li>\r\n	<li>Pregnancy: Pregnant individuals should avoid deep forward folds like Paschimottanasana, particularly during the second and third trimesters. Instead, opt for more suitable prenatal yoga poses that cater to the changing needs of your body.</li>\r\n	<li>High blood pressure: If you have high blood pressure, practice Paschimottanasana with caution. Avoid straining or forcefully folding forward, as this can raise blood pressure. Instead, focus on a gentle forward fold with the support of props and listen to your body&rsquo;s cues.</li>\r\n</ul>\r\n\r\n<p>Always prioritize your safety and well-being during your yoga practice. If at any point you experience pain or discomfort, ease out of the pose and seek guidance from a qualified professional.</p>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p>In the fast-paced world we live in, finding moments of serenity and relaxation is vital for our overall well-being. Paschimottanasana, the Seated Forward Bend, offers a doorway to tranquility, releasing tension in the body and calming the mind.</p>\r\n\r\n<p>Through regular practice, Paschimottanasana enhances flexibility, improves digestion, and stimulates the abdominal organs. It provides relief from back pain, reduces stress, and cultivates a sense of inner peace. This asana is a powerful tool for reconnecting with ourselves and finding balance amidst the chaos of everyday life.</p>\r\n\r\n<p>Whether you&rsquo;re a beginner or an experienced yogi, Paschimottanasana welcomes practitioners of all levels. Embrace the journey this asana offers, and allow it to guide you towards a state of deep relaxation and wellness. With each forward fold, may you find a sanctuary within yourself, and may the practice of Paschimottanasana bring you closer to a harmonious body and mind.</p>\r\n\r\n<p>So, roll out your mat, find a quiet space, and embark on the transformative practice of Paschimottanasana. Discover the beauty of surrender, the power of stillness, and the profound benefits this timeless asana has to offer.</p>', 'Paschimottanasana: Benefits, Preparations, Steps, Mistakes', 'Paschimottanasana', '‍Introducing the Paschimottanasana, a blissful yoga pose that will transport your body and mind to a place of deep relaxation. This seated forward bend is perfect for those seeking a therapeutic escape from the chaos of everyday life. In just a few minutes, this transformative asana can release tension in your back, hamstrings, and shoulders, while also calming the nervous system and soothing the mind.', '0', '0', 1, '2023-10-09 04:18:01', '2023-10-09 04:18:01'),
(18, NULL, NULL, NULL, 'Inner Thigh Stretches: Improving Flexibility and Preventing Injury', 'inner-thigh-stretches-improving-flexibility-and-preventing-injury', '/upload/blog/6523ccda40f60blog3.webp', 'Inner Thigh Stretches', '<p>&zwj;Looking to stretch and strengthen your inner thighs stretches ? Look no further! In this article, we will explore effective and safe exercises specifically targeting the inner thigh muscles. Having tight or weak inner thigh muscles can lead to discomfort, limited range of motion, and even injury. By incorporating targeted stretches into your fitness routine, you can improve flexibility, prevent imbalances, and enhance overall athletic performance.</p>\r\n\r\n<h3>Importance of stretching the inner thighs</h3>\r\n\r\n<p>Stretching the inner thighs is crucial for maintaining a balanced and healthy body. The inner thigh muscles, also known as the adductors, play a significant role in stabilizing the hips, pelvis, and knees. When these muscles are tight or weak, it can lead to imbalances and compensations in other areas of the body, causing pain and limited movement.</p>\r\n\r\n<p>By regularly stretching the inner thighs, you can improve flexibility and range of motion in the hip joint. This increased mobility not only enhances athletic performance but also reduces the risk of injuries, such as groin strains and hip impingements. Additionally, stretching the inner thighs can help improve posture and alleviate lower back pain by promoting proper alignment of the pelvis.</p>\r\n\r\n<h3>Benefits of inner thigh stretches</h3>\r\n\r\n<p>Incorporating inner thigh stretches into your fitness routine offers numerous benefits beyond flexibility. By engaging these muscles, you can enhance your overall athletic performance and functional movement patterns. Here are some key benefits of regularly practicing inner thigh stretches:</p>\r\n\r\n<ol>\r\n	<li>Improved flexibility:&nbsp;Stretching the inner thighs helps lengthen the adductor muscles, allowing for a greater range of motion in the hips and pelvis. This increased flexibility can improve performance in activities that require a wide stance or lateral movement, such as dancing, martial arts, and sports like soccer or basketball.</li>\r\n	<li>Injury prevention:&nbsp;Tight inner thigh muscles can contribute to imbalances in the lower body, leading to strain and injury. By maintaining flexibility in the adductors, you can reduce the risk of hip, groin, and knee injuries. This is especially important for athletes who engage in activities that involve quick changes in direction or repetitive lateral movements.</li>\r\n	<li>Enhanced muscle activation:&nbsp;Stretching the inner thighs can activate and strengthen the adductor muscles, improving their ability to stabilize the hips and pelvis during movement. This can enhance overall athletic performance and functional movements, such as squatting, lunging, and jumping.</li>\r\n	<li>Improved posture:&nbsp;Tight inner thighs can contribute to postural imbalances, leading to poor alignment of the pelvis and lower back. Regularly stretching these muscles can help maintain proper posture, alleviating lower back pain and reducing the risk of spinal injuries.</li>\r\n</ol>\r\n\r\n<h3>Common causes of tight inner thighs</h3>\r\n\r\n<p>Before diving into the stretches, it&rsquo;s essential to understand the common causes of tight inner thighs. Identifying these factors can help you address the root cause of tightness and prevent future imbalances. Here are some common causes of tight inner thigh muscles:</p>\r\n\r\n<ul>\r\n	<li>Sedentary lifestyle:&nbsp;Sitting for extended periods, such as during desk jobs or long commutes, can lead to tightness in the inner thighs. Lack of movement and prolonged sitting can cause the adductor muscles to become shortened and stiff.</li>\r\n	<li>Overuse or repetitive movements:&nbsp;Engaging in activities that involve repetitive hip adduction movements, such as running, cycling, or dancing, can cause the inner thighs to become tight. These repetitive motions without proper stretching and recovery can lead to muscle imbalances and tightness.</li>\r\n	<li>Lack of stretching:&nbsp;Failing to incorporate stretching exercises into your fitness routine can contribute to tightness in the inner thighs. Stretching is essential for maintaining muscle length and preventing muscular imbalances.</li>\r\n	<li>Muscle imbalances:&nbsp;Weakness in opposing muscle groups, such as the outer hip abductors, can lead to compensations and tightness in the inner thighs. It&rsquo;s crucial to maintain balance between muscle groups to prevent overuse and tightness.</li>\r\n</ul>\r\n\r\n<h3>Preparing for inner thigh stretches</h3>\r\n\r\n<p>Before diving into the inner thigh stretches, it&rsquo;s essential to prepare your body for optimal stretching. Follow these steps to ensure a safe and effective stretching session:</p>\r\n\r\n<ul>\r\n	<li>Warm-up:&nbsp;Before stretching, warm up your body with light cardio exercises, such as jogging or jumping jacks, to increase blood flow to the muscles and prepare them for stretching.</li>\r\n	<li>Dynamic stretching:&nbsp;Incorporate dynamic stretches that target the lower body, such as leg swings or hip circles, to further warm up the muscles and increase their flexibility.</li>\r\n	<li>Proper form:&nbsp;Pay attention to your posture and body alignment during stretches. Maintain a neutral spine, engage your core, and avoid any excessive bouncing or jerking movements that can lead to injury.</li>\r\n	<li>Breathing:&nbsp;Breathe deeply and relax into each stretch. Exhale as you deepen the stretch, allowing your muscles to release tension.</li>\r\n	<li>Progress gradually:&nbsp;Start with easier stretches and gradually progress to more advanced ones as your flexibility improves. Avoid pushing yourself too hard and listen to your body&rsquo;s limits.</li>\r\n</ul>\r\n\r\n<p>Now that you&rsquo;re warmed up and prepared, let&rsquo;s explore a variety of inner thigh stretches suitable for all levels of fitness.</p>\r\n\r\n<h3>Basic inner thigh stretches for beginners</h3>\r\n\r\n<ul>\r\n	<li>Butterfly Stretch:&nbsp;Sit on the floor and bring the soles of your feet together, allowing your knees to fall out to the sides. Gently press your knees down towards the floor while keeping your back straight. Hold this stretch for 30 seconds to 1 minute, focusing on feeling the stretch in your inner thighs. Repeat 3-5 times.</li>\r\n	<li>Lunge Stretch:&nbsp;Start in a lunge position with your right foot forward and your left knee on the ground. Slowly shift your weight forward, feeling the stretch in your inner thigh. Hold for 30 seconds and then switch sides. Repeat 3-5 times on each side.</li>\r\n	<li>Standing Straddle Stretch:&nbsp;Stand with your feet wider than hip-width apart. Slowly hinge forward at the hips, reaching your hands towards the floor. Feel the stretch in your inner thighs and hold for 30 seconds. Repeat 3-5 times.</li>\r\n</ul>\r\n\r\n<p>Remember to breathe deeply and relax into each stretch. Gradually increase the intensity of the stretch as your flexibility improves.</p>\r\n\r\n<h3>Advanced inner thigh stretches for flexibility</h3>\r\n\r\n<p>As you progress in your stretching routine, you can incorporate more challenging stretches to further improve flexibility in your inner thighs. Here are some advanced inner thigh stretches to try:</p>\r\n\r\n<ul>\r\n	<li>Seated Straddle Stretch:&nbsp;Sit on the floor with your legs spread wide apart. Slowly walk your hands forward, hinging at the hips, until you feel a stretch in your inner thighs. Hold this position for 30 seconds to 1 minute, focusing on deepening the stretch with each breath. Repeat 3-5 times.</li>\r\n	<li>Frog Pose:&nbsp;Start on your hands and knees, then slowly widen your knees apart as far as comfortable. Lower your forearms to the ground and allow your hips to sink towards the floor. Hold this pose for 30 seconds to 1 minute, feeling the stretch in your inner thighs. Repeat 3-5 times.</li>\r\n	<li>Side Lunge Stretch:&nbsp;Stand with your feet wider than hip-width apart. Take a wide step to the right, bending your right knee and keeping your left leg straight. Sink into the lunge, feeling the stretch in your inner thigh. Hold for 30 seconds and then switch sides. Repeat 3-5 times on each side.</li>\r\n</ul>\r\n\r\n<p>These advanced stretches require a greater level of flexibility and should only be attempted once you have mastered the basic stretches and have built up sufficient strength and flexibility in your inner thighs.</p>\r\n\r\n<h3>Tips for getting the most out of your inner thigh stretches</h3>\r\n\r\n<p>To maximize the benefits of your inner thigh stretches, keep the following tips in mind:</p>\r\n\r\n<ul>\r\n	<li>Consistency is key:&nbsp;Regularly practice these stretches to see significant improvements in your flexibility and range of motion. Aim for at least three stretching sessions per week.</li>\r\n	<li>Listen to your body:&nbsp;Avoid pushing yourself too hard or forcing a stretch beyond your comfort zone. Respect your body&rsquo;s limits and progress gradually.</li>\r\n	<li>Combine with other stretches:&nbsp;Incorporate stretches that target other muscle groups, such as the hips, hamstrings, and glutes, to maintain overall muscle balance and prevent imbalances.</li>\r\n	<li>Hold each stretch:&nbsp;Aim to hold each stretch for at least 30 seconds to 1 minute. This allows the muscles to fully relax and lengthen.</li>\r\n	<li>Stretch after workouts:&nbsp;Perform these stretches after your regular workout sessions when your muscles are warm and more pliable.</li>\r\n</ul>\r\n\r\n<p>Remember to always consult with a healthcare professional or a certified fitness instructor before starting any new exercise or stretching routine, especially if you have any pre-existing injuries or medical conditions.</p>\r\n\r\n<h3>Incorporating inner thigh stretches into your workout routine</h3>\r\n\r\n<p>To make the most of your inner thigh stretches, consider incorporating them into your existing workout routine. Here are some ideas on how to integrate these stretches:</p>\r\n\r\n<ul>\r\n	<li>Pre-workout warm-up:&nbsp;Perform a few dynamic stretches that target the inner thighs before your regular workout to warm up the muscles and increase their flexibility.</li>\r\n	<li>In-between exercises:&nbsp;Take short stretching breaks between exercises to release tension in the inner thighs and maintain flexibility throughout your workout.</li>\r\n	<li>Post-workout cooldown:&nbsp;After your workout, dedicate a few minutes to stretch the inner thighs and other muscle groups to promote muscle recovery and prevent tightness.</li>\r\n</ul>\r\n\r\n<p>By integrating these stretches into your workout routine, you can ensure that your inner thigh muscles are properly stretched, preventing imbalances and improving overall flexibility.</p>\r\n\r\n<h3>Other exercises that complement inner thigh stretches</h3>\r\n\r\n<p>While inner thigh stretches are essential for targeting the adductor muscles, it&rsquo;s also important to engage in exercises that complement these stretches. Strengthening the surrounding muscle groups can further enhance stability and prevent imbalances. Here are some exercises that complement inner thigh stretches:</p>\r\n\r\n<ul>\r\n	<li>Hip Abductor Exercises:&nbsp;Engage in exercises that target the outer hip abductor muscles, such as side leg lifts or clamshells. These exercises help strengthen the muscles that oppose the inner thighs, maintaining muscle balance.</li>\r\n	<li>Core Strengthening:&nbsp;A strong core helps stabilize the pelvis and lower back, reducing strain on the inner thigh muscles. Incorporate exercises like planks, Russian twists, or bicycle crunches to strengthen your core.</li>\r\n	<li>Compound Lower Body Exercises:&nbsp;Exercises like squats, lunges, and deadlifts engage multiple muscle groups, including the inner thighs. These exercises not only strengthen the lower body but also improve overall functional movement patterns.</li>\r\n</ul>\r\n\r\n<p>By incorporating these complementary exercises into your fitness routine, you can enhance the effectiveness of your inner thigh stretches and promote overall muscle balance.</p>\r\n\r\n<h3>Conclusion:&nbsp;</h3>\r\n\r\n<p>Incorporating inner thigh stretches into your fitness routine offers countless benefits, from improved flexibility and enhanced athletic performance to injury prevention and better posture. By regularly practicing these stretches, you can lengthen and strengthen the inner thigh muscles, reducing the risk of imbalances and discomfort.</p>\r\n\r\n<p>Remember to warm up before stretching, progress gradually, and listen to your body&rsquo;s limits. Consistency is key, so aim to incorporate these stretches into your routine at least three times a week. Combine them with other stretches and complementary exercises to maintain overall muscle balance.</p>\r\n\r\n<p>Stretching your inner thighs not only improves your physical well-being but also enhances your overall quality of life. So, why wait? Start implementing these stretches today and experience the incredible benefits of flexible and strong inner thighs.</p>', 'Inner Thigh Stretches: Improving Flexibility and Preventing Injury', 'Inner Thigh Stretches', '‍Looking to stretch and strengthen your inner thighs stretches ? Look no further! In this article, we will explore effective and safe exercises specifically targeting the inner thigh muscles. Having tight or weak inner thigh muscles can lead to discomfort, limited range of motion, and even injury. By incorporating targeted stretches into your fitness routine, you can improve flexibility, prevent imbalances, and enhance overall athletic performance.', '0', '0', 1, '2023-10-09 04:20:18', '2023-10-09 04:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `metatitle` varchar(600) NOT NULL,
  `metakeyword` varchar(600) NOT NULL,
  `metadescription` varchar(600) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `formstatus` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoryfaqs`
--

CREATE TABLE `categoryfaqs` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` longtext DEFAULT NULL,
  `footer` longtext DEFAULT NULL,
  `tawktourl` varchar(255) DEFAULT NULL,
  `tawkto` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `header`, `footer`, `tawktourl`, `tawkto`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '2023-06-13 05:30:00', '2023-09-22 04:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `consultdate` date DEFAULT NULL,
  `consulttime` time DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coursecurriculams`
--

CREATE TABLE `coursecurriculams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecurriculams`
--

INSERT INTO `coursecurriculams` (`id`, `course_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, '200 Hour Yoga Teacher Training in Rishikesh India', '<p>200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India<br></p>', '2023-10-06 05:24:13', '2023-10-06 05:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `coursefaqs`
--

CREATE TABLE `coursefaqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courseinclusions`
--

CREATE TABLE `courseinclusions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `inclusion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseinclusions`
--

INSERT INTO `courseinclusions` (`id`, `course_id`, `inclusion`, `created_at`, `updated_at`) VALUES
(11, 1, 'test', '2023-10-06 08:47:24', '2023-10-06 08:47:24'),
(12, 1, 'aasdf', '2023-10-06 08:47:24', '2023-10-06 08:47:24'),
(13, 1, 'sadf', '2023-10-06 08:47:24', '2023-10-06 08:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `certification` varchar(200) DEFAULT NULL,
  `privateroom` int(11) DEFAULT NULL,
  `shared2room` int(11) DEFAULT NULL,
  `shared3room` int(11) DEFAULT NULL,
  `shared6room` int(11) DEFAULT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `metatitle` varchar(600) DEFAULT NULL,
  `metakeywords` varchar(600) DEFAULT NULL,
  `metadescription` varchar(600) DEFAULT NULL,
  `alt` varchar(1200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hour` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `slug`, `duration`, `certification`, `privateroom`, `shared2room`, `shared3room`, `shared6room`, `description`, `image`, `metatitle`, `metakeywords`, `metadescription`, `alt`, `status`, `created_at`, `updated_at`, `hour`) VALUES
(1, '200 Hour Yoga Teacher Training in Rishikesh India', '200-hour-yoga-teacher-training-in-rishikesh-india', '15 Days', '200 Hour Yoga Teacher', 299, 499, 699, 999, '<p>Our 200 hour Yoga Teacher Training in Rishikesh is accredited by Yoga Alliance, USA. Upon completing this 200 hour Yoga TTC, you will become a certified yoga teacher with enough theoretical and practical knowledge to guide a yoga class. This is a foundational course to become a yoga teacher. You will be eligible to register yourself as an RYT-200 (Registered Yoga Teacher) with the Yoga Alliance, USA, and be certified to teach yoga in your own country or worldwide.</p>\r\n\r\n<p>This 200 hour Yoga Teacher Training in India delivers practical, theoretical, and comprehensive training to deepen your yoga practice and teaching ability to make you a highly skilled yoga teacher. Over the past few years, we have graduated many students to become successful yoga teachers around the globe. The curriculum takes you through all the required aspects of yoga including asanas (yoga postures), pranayama (breathing techniques), meditation, yoga philosophy, anatomy, teaching methodology, and ethics. It will guide you through all the fundamentals of yoga so that you can teach with confidence and ease.</p>', '/upload/course/651fdd127b216dsc00857-1.webp', '200 Hour Yoga Teacher Training in Rishikesh India', '200 Hour Yoga Teacher Training in Rishikesh India', '200 Hour Yoga Teacher', '200 Hour Yoga Teacher Training in Rishikesh India', 1, '2023-10-06 03:36:02', '2023-10-06 04:40:45', '200 Hr'),
(2, '300 Hour Yoga Teacher Training In Rishikesh India', '300-hour-yoga-teacher-training-in-rishikesh-india', '30 Days', '300 Hour Yoga', 399, 599, 899, 1129, '<p>Our 300 hour Yoga Teacher Training in Rishikesh is an intense and advanced-level course that dives deeper into the topics covered in the&nbsp;<a href=\"https://www.nirvanayogaschoolindia.com/200-hour-yoga-teacher-training-in-rishikesh-india\" style=\"box-sizing: border-box; color: rgb(0, 0, 0);\" target=\"_blank\">200 hour yoga teacher training course</a>. The course is designed in such a way that it will deepen your yoga practice and teaching skills, thus taking you one step further towards becoming a successful yoga teacher. The training last for 29 days, during which you will get an in-depth understanding of advanced asanas (postures) and their different variations, alignment &amp; teaching techniques, advanced pranayama &amp; meditation techniques, understanding the philosophy of yoga, business skills &amp; ethics. The course will also help you focus on your personal development as a yoga teacher.</p>\r\n\r\n<p>This course is accredited by Yoga Alliance, USA, and is recognized globally. Our teachers will help you deepen your understanding of yoga philosophy, develop effective teaching skills, and cultivate the ability to create transformative experiences for your students. Complete your 300 Hour Yoga Teacher Training in India at Nirvana Yoga School and be ready to inspire others on their yogic path.</p>', '/upload/course/651fce9c546f6dsc00857-1.webp', '300 Hour Yoga Teacher Training In Rishikesh India', '300 Hour Yoga', 'Our 300 hour Yoga Teacher Training in Rishikesh is an intense and advanced-level course that dives deeper into the topics covered in the 200 hour yoga teacher training course.', '300 Hour Yoga', 1, '2023-10-06 03:38:44', '2023-10-06 03:38:44', '200 Hr');

-- --------------------------------------------------------

--
-- Table structure for table `courseschdules`
--

CREATE TABLE `courseschdules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `task` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseschdules`
--

INSERT INTO `courseschdules` (`id`, `course_id`, `time`, `task`, `created_at`, `updated_at`) VALUES
(1, 2, '05-06', 'test1', '2023-10-06 23:53:12', '2023-10-06 23:53:12'),
(2, 2, '05-06', 'tett1', '2023-10-06 23:53:12', '2023-10-06 23:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `coursetestimonials`
--

CREATE TABLE `coursetestimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursetestimonials`
--

INSERT INTO `coursetestimonials` (`id`, `course_id`, `name`, `review`, `created_at`, `updated_at`) VALUES
(3, 1, 'Himanshu', '200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India200 Hour Yoga Teacher Training in Rishikesh India', '2023-10-06 07:03:54', '2023-10-06 07:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `customcodes`
--

CREATE TABLE `customcodes` (
  `id` int(11) NOT NULL,
  `css` text DEFAULT NULL,
  `js` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE `errors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fixissues`
--

CREATE TABLE `fixissues` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `countrycode` varchar(10) DEFAULT NULL,
  `issue` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(37, '2014_10_12_100000_create_password_resets_table', 1),
(38, '2019_08_19_000000_create_failed_jobs_table', 1),
(39, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(40, '2023_06_09_100810_add_role_id_to_table', 1),
(41, '2023_06_09_112017_create_categories_table', 1),
(42, '2023_06_09_112028_create_blogs_table', 1),
(43, '2023_06_09_112039_create_products_table', 1),
(44, '2023_06_09_112053_create_supportfaqs_table', 1),
(45, '2023_06_10_061518_add_color_to_table', 1),
(46, '2023_06_10_063642_create_subcategories_table', 1),
(47, '2023_06_12_071256_create_blogfaqs_table', 1),
(50, '2023_06_12_081745_create_productfaqs_table', 2),
(51, '2023_09_22_105645_create_testimonials_table', 3),
(52, '2023_09_25_112430_create_courses_table', 4),
(53, '2023_10_06_075818_add_hour_to_courses_table', 5),
(54, '2023_10_06_101554_create_coursefaqs_table', 6),
(55, '2023_10_06_103457_create_coursecurriculams_table', 7),
(56, '2023_10_06_111351_create_coursetestimonials_table', 8),
(57, '2023_10_06_123904_create_courseinclusions_table', 9),
(58, '2023_10_06_143148_create_courseschdules_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productfaqs`
--

CREATE TABLE `productfaqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `setup` text DEFAULT NULL,
  `metatitle` varchar(600) NOT NULL,
  `metakeyword` varchar(600) NOT NULL,
  `metadescription` varchar(600) NOT NULL,
  `views` varchar(255) NOT NULL DEFAULT '0',
  `likes` varchar(255) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `metatitle` varchar(600) DEFAULT NULL,
  `metakeyword` varchar(600) DEFAULT NULL,
  `metadescription` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `name`, `slug`, `image`, `alt`, `description`, `metatitle`, `metakeyword`, `metadescription`, `status`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, '/upload/seo/64ce2fb9f3a5aconnect-wireless-printer-with-pc-bluetooth-printer-setup.webp', 'bluetooth printer setup', NULL, 'home', 'home', 'home', 1, '2023-06-14 01:45:40', '2023-09-22 05:05:31'),
(10, 'aboutus', NULL, '/upload/seo/650d6e18c05b9sound-bowls-5-scaled.jpg', NULL, NULL, 'About us', 'About Us', 'About Us', 0, '2023-09-22 05:06:08', '2023-09-22 05:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usmobile` varchar(20) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `logoalt` varchar(255) DEFAULT NULL,
  `fevicon` varchar(255) DEFAULT NULL,
  `robots` tinyint(1) NOT NULL DEFAULT 0,
  `disclaimer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `url`, `email`, `usmobile`, `logo`, `logoalt`, `fevicon`, `robots`, `disclaimer`, `created_at`, `updated_at`) VALUES
(1, 'Bluetooth Printer Setup', 'https://bluetoothprintersetup.com/', 'admin@bluetoothprintersetup.com', '1-877-469-0297', '/upload/setting/64cba4bfc56e5logos.png', 'Bluetooth Printer Setup', '/upload/setting/64cb95207cb8ffevicon.png', 1, 'All brand names, trademarks, images mentioned on this website are for reference only, and they belongs to their respective owners. We are here to help our users to read our content and fix their issues with our custom step by step guides for all the printer brands. We have no affiliation with any brand and the images used belong to their respective owners.', '0000-00-00 00:00:00', '2023-08-03 07:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `staticpages`
--

CREATE TABLE `staticpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `metatitle` varchar(600) DEFAULT NULL,
  `metakeyword` varchar(600) DEFAULT NULL,
  `metadescription` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staticpages`
--

INSERT INTO `staticpages` (`id`, `name`, `slug`, `description`, `metatitle`, `metakeyword`, `metadescription`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', 'privacy-policy', '<p dir=\"ltr\">Thank you for visiting bluetoothprintersetup.com (&quot;the Website&quot;). This Privacy Policy is designed to inform you about the types of information we collect from you when you visit our website and how we use, share, and protect that information. We respect your privacy and are committed to safeguarding your personal data. By accessing or using the Website, you agree to the terms and conditions of this Privacy Policy.</p>\r\n\r\n<h2 dir=\"ltr\">Information We Collect</h2>\r\n\r\n<ol>\r\n	<li>Personal Information: When you visit the Website, we may collect personal information that you voluntarily provide to us, such as your name and email address. This information is collected when you subscribe to our newsletter, submit a contact form, or engage in other interactive features of the Website.</li>\r\n	<li>Non-Personal Information: We may also collect non-personal information, such as your IP address, browser type, operating system, and referring website. This information is used to analyze trends, administer the Website, track user movements, and gather demographic information for aggregate use. Non-personal information cannot be used to identify you personally.</li>\r\n</ol>\r\n\r\n<h2 dir=\"ltr\">Cookies and Tracking Technologies</h2>\r\n\r\n<p>The Website may use cookies and other tracking technologies to enhance your browsing experience. Cookies are small text files that are placed on your computer or mobile device by a website when you visit it. They are widely used to make websites work more efficiently and provide certain functionality. Cookies may also be used to collect information about your online activities over time and across different websites or other online services.</p>\r\n\r\n<p dir=\"ltr\">You have the option to accept or decline cookies. Most web browsers automatically accept cookies, but you can modify your browser settings to decline cookies if you prefer. However, please note that disabling cookies may affect your ability to access and use certain features of the Website.</p>\r\n\r\n<h2 dir=\"ltr\">How We Use Your Information</h2>\r\n\r\n<ol dir=\"ltr\">\r\n	<li>Personal Information: We may use your personal information to communicate with you, respond to your inquiries, provide the services you request, and send you updates and promotional materials related to the Website. We may also use your information to personalize your experience and improve the content and functionality of the Website.</li>\r\n	<li>Non-Personal Information: Non-personal information is used for analytical purposes, such as analyzing trends, administering the Website, tracking user movements, and gathering demographic information. This information helps us understand how users interact with the Website and enables us to improve our services.</li>\r\n</ol>\r\n\r\n<h2 dir=\"ltr\">Information Sharing and Disclosure</h2>\r\n\r\n<p dir=\"ltr\">We do not sell, trade, or rent your personal information to third parties. However, we may share your information with trusted third-party service providers who assist us in operating the Website and providing services to you. These service providers have access to your personal information only to perform specific tasks on our behalf and are obligated to keep your information confidential.</p>\r\n\r\n<p dir=\"ltr\">We may also disclose your information if required by law, in response to a subpoena or court order, or when we believe in good faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond to a government request.</p>\r\n\r\n<h2 dir=\"ltr\">Data Security</h2>\r\n\r\n<p dir=\"ltr\">We take reasonable precautions to protect the security of your personal information. However, no method of transmission over the Internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p>\r\n\r\n<h2 dir=\"ltr\">Links to Third-Party Websites</h2>\r\n\r\n<p dir=\"ltr\">The Website may contain links to third-party websites for your convenience and information. These websites have their own privacy policies, and we encourage you to review them. We are not responsible for the privacy practices or the content of such websites.</p>\r\n\r\n<h2 dir=\"ltr\">Children&#39;s Privacy</h2>\r\n\r\n<p dir=\"ltr\">The Website is not directed to individuals under the age of 13. We do not knowingly collect personal information from children under 13. If you are a parent or guardian and believe that your child has provided us with personal information, please contact us, and we will take steps to remove that information from our systems.</p>\r\n\r\n<h2 dir=\"ltr\">Changes to this Privacy Policy</h2>\r\n\r\n<p dir=\"ltr\">We reserve the right to modify this Privacy Policy at any time. Any changes will be effective immediately upon posting the updated Privacy Policy on the Website. Your continued use of the Website after any such changes constitutes your acceptance of the revised Privacy Policy.</p>\r\n\r\n<h2 dir=\"ltr\">Contact Us</h2>\r\n\r\n<p dir=\"ltr\">If you have any questions or concerns about this Privacy Policy or our privacy practices, please contact us at the provided contact information on our website.</p>\r\n\r\n<p dir=\"ltr\">Thank you for your trust in bluetoothprintersetup.com. We value your privacy and strive to protect your personal information to provide you with the best possible experience on our Website.</p>', 'Privacy Policy | bluetoothprintersetup.com', 'Privacy Policy', 'Read our Privacy Policy to understand how Bluetooth Printer Setup collects, uses, and protects your personal info. Safeguarding your privacy is our priority.', 1, '2023-06-14 01:22:59', '2023-08-05 04:01:52'),
(2, 'Terms & Conditions', 'terms-condition', '<p dir=\"ltr\">The following terms and conditions (&quot;Terms&quot;) govern the use of the website &quot;Bluetooth Printer Setup&quot; (bluetoothprintersetup.com)&nbsp;and the services provided by Bluetooth Printer Setup (referred to as &quot;we,&quot; &quot;us,&quot; or &quot;our&quot;). By accessing or using our website and services, you agree to comply with these Terms. If you do not agree with any part of these Terms, please refrain from using our website or services.</p>\r\n\r\n<h2 dir=\"ltr\">1. Service Description:</h2>\r\n\r\n<p>&nbsp; &nbsp; a. Bluetooth Printer Setup offers support services for printers. We aim to provide assistance, guidance, and troubleshooting for printer-related issues.</p>\r\n\r\n<p>&nbsp; &nbsp; b. Our services may include phone support, live chat, email communication, and remote access, as deemed necessary and appropriate by our technicians.</p>\r\n\r\n<p>&nbsp; &nbsp; c. We reserve the right to modify, suspend, or terminate any aspect of our services without prior notice.</p>\r\n\r\n<h2 dir=\"ltr\">2. Eligibility:</h2>\r\n\r\n<p>&nbsp; &nbsp; a. Users must be at least 18 years of age or have the legal capacity to enter into binding agreements.</p>\r\n\r\n<p>&nbsp; &nbsp; b. By using our services, you represent and warrant that you meet the eligibility requirements mentioned above.</p>\r\n\r\n<h2 dir=\"ltr\">3. Service Limitations:</h2>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;a. While we strive to provide accurate and reliable information, our services are offered &quot;as is&quot; without any warranties or guarantees.</p>\r\n\r\n<p dir=\"ltr\">&nbsp;&nbsp;&nbsp;b. We do not guarantee the resolution of all printer-related issues or the compatibility of our services with every printer model.</p>\r\n\r\n<p dir=\"ltr\">&nbsp;&nbsp;&nbsp;c. We shall not be held liable for any damages, losses, or liabilities arising from the use of our services or reliance on the information provided.</p>\r\n\r\n<h2 dir=\"ltr\">4. User Obligations:</h2>\r\n\r\n<p dir=\"ltr\">&nbsp;&nbsp;&nbsp;a. Users agree to provide accurate and up-to-date information when availing of our services or submitting any forms or requests.</p>\r\n\r\n<p dir=\"ltr\">&nbsp;&nbsp;&nbsp;b. Users shall not use our website or services for any illegal, fraudulent, or unauthorized purposes.</p>\r\n\r\n<p dir=\"ltr\">&nbsp;&nbsp;&nbsp;c. Users shall not engage in any activity that may disrupt or interfere with the proper functioning of our website or services.</p>\r\n\r\n<h2 dir=\"ltr\">5. External Links:</h2>\r\n\r\n<p dir=\"ltr\">&nbsp;&nbsp;&nbsp;a. Our website may contain links to third-party websites for reference or additional resources. We do not endorse, control, or take responsibility for the content, practices, or policies of any external websites.</p>\r\n\r\n<p dir=\"ltr\">&nbsp;&nbsp;&nbsp;b. Users should exercise caution when accessing external links and are encouraged to review the terms and privacy policies of those websites.</p>\r\n\r\n<h2 dir=\"ltr\">6. Changes to Terms and Conditions:&nbsp;&nbsp;&nbsp;</h2>\r\n\r\n<p dir=\"ltr\">a. We reserve the right to modify, update, or change these Terms at any time without prior notice. Any changes made will be effective immediately upon posting on the website.</p>\r\n\r\n<p dir=\"ltr\">&nbsp;&nbsp;&nbsp;b. It is your responsibility to review these Terms periodically for any updates or modifications.</p>\r\n\r\n<h2 dir=\"ltr\">7. Governing Law and Jurisdiction:</h2>\r\n\r\n<p dir=\"ltr\">These Terms shall be governed by and construed in accordance with the laws of the jurisdiction in which Bluetooth Printer Setup operates. Any disputes arising out of these Terms or the use of our website and services shall be subject to the exclusive jurisdiction of the courts in that jurisdiction.</p>\r\n\r\n<p dir=\"ltr\">If you have any questions or concerns regarding these Terms and Conditions, please contact us at the provided contact information on our website.</p>', 'Terms and Conditions | bluetoothprintersetup.com', 'Terms & Condition', 'Review our Terms and Conditions to learn about the guidelines and obligations when using Bluetooth Printer Setup\'s official website and services.', 1, '2023-06-14 01:23:20', '2023-08-05 04:01:23'),
(3, 'Disclaimer', 'disclaimer', '<p dir=\"ltr\">&quot;Bluetooth Printer Setup&quot; (bluetoothprintersetup.com)&nbsp;is an independent entity and has no direct connection, association, or affiliation with any printer brand or manufacturer. We provide support services for printers without bias towards any specific brand. Any references made to printer brands, manufacturers, products, trademarks, or any other related entities are solely for informational purposes. We do not claim ownership or endorsement of any such brand or product. Our website may contain links to third-party websites for reference or additional resources. We do not endorse, control, or take responsibility for the content, practices, or policies of any external websites. Users should exercise caution when accessing external links and are encouraged to review the terms and privacy policies of those websites.</p>\r\n\r\n<p>&quot;Bluetooth Printer Setup&quot; reserves the right to modify, update, or change this disclaimer at any time without prior notice. Any changes made will be effective immediately upon posting on the website.</p>', 'Disclaimer | bluetoothprintersetup.com', 'Disclaimer', 'Read our Disclaimer to understand that Bluetooth Printer Setup (bluetoothprintersetup.com) is an independent service provider and has no affiliation with any printer brand.', 1, '2023-06-14 01:23:39', '2023-08-05 04:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `metatitle` varchar(600) NOT NULL,
  `metakeyword` varchar(600) NOT NULL,
  `metadescription` varchar(600) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategoryfaqs`
--

CREATE TABLE `subcategoryfaqs` (
  `id` int(11) NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supportfaqs`
--

CREATE TABLE `supportfaqs` (
  `id` bigint(20) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supportfaqs`
--

INSERT INTO `supportfaqs` (`id`, `question`, `answer`, `created_at`, `updated_at`, `status`) VALUES
(9, 'What is Lorem Ipsum?', '<p><span style=\"color: rgb(99, 99, 99); font-family: Poppins, sans-serif; font-size: 16px; letter-spacing: normal;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span><br></p>', '2023-10-09 02:37:38', '2023-10-09 02:37:38', 0),
(10, '2Where does it come from?', '<p><span style=\"color: rgb(99, 99, 99); font-family: Poppins, sans-serif; font-size: 16px; letter-spacing: normal;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span><br></p>', '2023-10-09 02:37:38', '2023-10-09 02:37:38', 0),
(11, 'Why do we use it?', '<p><span style=\"color: rgb(99, 99, 99); font-family: Poppins, sans-serif; font-size: 16px; letter-spacing: normal;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here.</span><br></p>', '2023-10-09 02:37:38', '2023-10-09 02:37:38', 0),
(12, 'Where can I get some?', '<p><span style=\"color: rgb(99, 99, 99); font-family: Poppins, sans-serif; font-size: 16px; letter-spacing: normal;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</span><br></p>', '2023-10-09 02:37:38', '2023-10-09 02:37:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `course`, `review`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Alex', '/upload/testimonial/6523b943ecb7bteacher-img.jpg', 'course1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, '2023-10-06 05:41:53', '2023-10-09 02:56:43'),
(5, 'Harry', '/upload/testimonial/6523b96a12b6ateacher-img.jpg', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, '2023-10-09 02:57:22', '2023-10-09 02:58:11'),
(6, 'Max', '/upload/testimonial/6523b98a3ab59teacher-img.jpg', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, '2023-10-09 02:57:54', '2023-10-09 02:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Admin', 'admin@test.com', NULL, '$2a$12$6lsdSd7n86JnkqebgAyJyu4cETFIeFjo8LNygO6H6AIPS88u6fjD.', NULL, '2023-06-12 03:44:00', '2023-06-12 03:44:00', 1),
(7, 'Robert Baker', 'robertbaker@getmyprinterbackonline.com', NULL, '$2y$10$TCmmNR8BMYI6OySAB6Bhz.j4vLTNXWVTUBicBdWpom4rF4JEuRlxG', NULL, '2023-07-13 04:24:26', '2023-07-13 04:24:26', 0),
(8, 'James Lucas', 'jameslucas@getmyprinterbackonline.com', NULL, '$2y$10$y4Jx6d26E1zY3TtavjeE4.dI2jkidmm/NhCscmh9hGYYtu..UGz22', NULL, '2023-07-13 04:25:07', '2023-07-13 04:25:07', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogfaqs`
--
ALTER TABLE `blogfaqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogfaqs_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryfaqs`
--
ALTER TABLE `categoryfaqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecurriculams`
--
ALTER TABLE `coursecurriculams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursecurriculams_course_id_foreign` (`course_id`);

--
-- Indexes for table `coursefaqs`
--
ALTER TABLE `coursefaqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursefaqs_course_id_foreign` (`course_id`);

--
-- Indexes for table `courseinclusions`
--
ALTER TABLE `courseinclusions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courseinclusions_course_id_foreign` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseschdules`
--
ALTER TABLE `courseschdules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courseschdules_course_id_foreign` (`course_id`);

--
-- Indexes for table `coursetestimonials`
--
ALTER TABLE `coursetestimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursetestimonials_course_id_foreign` (`course_id`);

--
-- Indexes for table `customcodes`
--
ALTER TABLE `customcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `errors_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fixissues`
--
ALTER TABLE `fixissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `productfaqs`
--
ALTER TABLE `productfaqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productfaqs_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staticpages`
--
ALTER TABLE `staticpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `subcategoryfaqs`
--
ALTER TABLE `subcategoryfaqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `supportfaqs`
--
ALTER TABLE `supportfaqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogfaqs`
--
ALTER TABLE `blogfaqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categoryfaqs`
--
ALTER TABLE `categoryfaqs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coursecurriculams`
--
ALTER TABLE `coursecurriculams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coursefaqs`
--
ALTER TABLE `coursefaqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courseinclusions`
--
ALTER TABLE `courseinclusions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courseschdules`
--
ALTER TABLE `courseschdules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coursetestimonials`
--
ALTER TABLE `coursetestimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customcodes`
--
ALTER TABLE `customcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `errors`
--
ALTER TABLE `errors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fixissues`
--
ALTER TABLE `fixissues`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productfaqs`
--
ALTER TABLE `productfaqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staticpages`
--
ALTER TABLE `staticpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategoryfaqs`
--
ALTER TABLE `subcategoryfaqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supportfaqs`
--
ALTER TABLE `supportfaqs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogfaqs`
--
ALTER TABLE `blogfaqs`
  ADD CONSTRAINT `blogfaqs_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categoryfaqs`
--
ALTER TABLE `categoryfaqs`
  ADD CONSTRAINT `categoryfaqs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coursecurriculams`
--
ALTER TABLE `coursecurriculams`
  ADD CONSTRAINT `coursecurriculams_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coursefaqs`
--
ALTER TABLE `coursefaqs`
  ADD CONSTRAINT `coursefaqs_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courseinclusions`
--
ALTER TABLE `courseinclusions`
  ADD CONSTRAINT `courseinclusions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courseschdules`
--
ALTER TABLE `courseschdules`
  ADD CONSTRAINT `courseschdules_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coursetestimonials`
--
ALTER TABLE `coursetestimonials`
  ADD CONSTRAINT `coursetestimonials_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `errors`
--
ALTER TABLE `errors`
  ADD CONSTRAINT `errors_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `productfaqs`
--
ALTER TABLE `productfaqs`
  ADD CONSTRAINT `productfaqs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategoryfaqs`
--
ALTER TABLE `subcategoryfaqs`
  ADD CONSTRAINT `subcategoryfaqs_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
