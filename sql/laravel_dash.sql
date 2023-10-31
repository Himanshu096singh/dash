-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 06:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_dash`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogfaqs`
--

CREATE TABLE `blogfaqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(1200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakeyword` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `likes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `subcategory_id`, `user_id`, `name`, `slug`, `image`, `alt`, `tags`, `description`, `metatitle`, `metakeyword`, `metadescription`, `views`, `likes`, `status`, `created_at`, `updated_at`) VALUES
(16, NULL, NULL, NULL, 'Demand for Yoga Instructors | Steps to Becoming a Yoga Instructor', 'demand-for-yoga-instructors-steps-to-becoming-a-yoga-instructor', '/upload/blog/6523cba80726eblog1.webp', 'Demand for Yoga Instructors', NULL, '<p>&zwj;&zwj;Are you passionate about yoga and want to share your knowledge and help others in their wellness journey? Becoming a yoga instructor might be the perfect path for you! In this article, we will explore the steps you need to take to become a certified yoga instructor and start teaching classes that inspire and transform lives.</p>\r\n\r\n<h2>The Demand for Yoga Instructors</h2>\r\n\r\n<p>Yoga has become increasingly popular in recent years, with more and more people realizing the physical, mental, and spiritual benefits it offers. As a result, the demand for qualified yoga instructors is on the rise. Yoga studios, fitness centers, and wellness retreats are constantly seeking skilled instructors to meet the growing demand. By becoming a yoga instructor, you not only get to pursue your passion but also have the opportunity to make a positive impact on the lives of others.</p>\r\n\r\n<h2>Steps to Becoming a Yoga Instructor</h2>\r\n\r\n<p>Becoming a yoga instructor requires dedication, commitment, and a genuine love for the practice. Here are the steps you need to take to embark on this fulfilling journey:</p>\r\n\r\n<h3>1. Choosing the Right Yoga Teacher Training Program</h3>\r\n\r\n<p>First and foremost, it&rsquo;s important to find a reputable&nbsp;<a href=\"https://nirvanayogaschoolindia.com/\">yoga teacher training</a>&nbsp;program. Look for programs that are accredited and have experienced instructors who align with your values and teaching style. A comprehensive training program will equip you with the knowledge and skills necessary to become an effective yoga instructor. During the training, you will dive deep into the philosophy and history of yoga, learn proper alignment and sequencing, and gain practical teaching experience. Research different programs and choose one that resonates with you.</p>\r\n\r\n<h3>2. The Importance of Yoga Certification</h3>\r\n\r\n<p>Once you complete your training, it&rsquo;s time to gain teaching experience. Offer free or donation-based classes to friends, family, or local community centers to start building your reputation and confidence. However, to establish yourself as a professional, consider obtaining a yoga alliance certification. This certification is recognized worldwide and demonstrates your commitment to excellence in teaching yoga. It not only enhances your credibility but also opens doors to teaching opportunities in various settings, including studios, gyms, corporate wellness programs, and private sessions.</p>\r\n\r\n<h3>3. Developing Your Yoga Teaching Skills</h3>\r\n\r\n<p>Becoming a skilled yoga instructor goes beyond completing a training program and obtaining certification. It requires continuous learning and development of your teaching skills. Attend workshops, seminars, and advanced training courses to deepen your understanding of yoga and refine your teaching techniques. Embrace feedback from students and fellow instructors to grow and evolve as a teacher. The more you invest in your own growth, the better equipped you will be to guide and inspire your students on their yoga journey.</p>\r\n\r\n<h3>4. Building a Yoga Instructor Brand</h3>\r\n\r\n<p>In today&rsquo;s digital age, it&rsquo;s essential to build an online presence and establish yourself as a yoga instructor. Create a professional website or blog where you can share your knowledge, experiences, and upcoming classes. Utilize social media platforms like Instagram and Facebook to connect with potential students and showcase your teaching style. Develop a unique brand that reflects your personality and values. Use high-quality images and engaging content to attract and retain followers. Building a strong online presence will not only help you reach a wider audience but also position you as an authority in the yoga community.</p>\r\n\r\n<h3>5. Marketing Yourself as a Yoga Instructor</h3>\r\n\r\n<p>To attract students and fill your classes, you need to effectively market yourself as a yoga instructor. Consider offering introductory specials or discounted packages to entice new students. Collaborate with local businesses or wellness centers to host workshops or events. Network with other health and wellness professionals to expand your reach and create mutually beneficial partnerships. Utilize online platforms like MindBody or ClassPass to list your classes and make it easy for students to find and book with you. Implement a strategic marketing plan to consistently promote your classes and services.</p>\r\n\r\n<h3>6. Finding Yoga Instructor Job Opportunities</h3>\r\n\r\n<p>While many yoga instructors choose to start their own studios or teach private sessions, there are also plenty of job opportunities available in established yoga studios, fitness centers, and wellness retreats. Keep an eye out for job postings on yoga-related websites, social media groups, and community bulletin boards. Attend yoga conferences and networking events to connect with studio owners and fellow instructors. Be proactive in seeking out teaching opportunities and don&rsquo;t be afraid to reach out and introduce yourself to potential employers. Building relationships within the yoga community can lead to valuable teaching opportunities.</p>\r\n\r\n<h3>7. Continuing Education for Yoga Instructors</h3>\r\n\r\n<p>As a yoga instructor, your learning journey never ends. Continuing education is crucial to stay updated with the latest trends, research, and teaching methodologies. Attend workshops and training programs to learn new styles of yoga, explore specialized areas such as prenatal or therapeutic yoga, and deepen your knowledge of anatomy and physiology. Pursue advanced certifications or become a mentor for new yoga instructors. By investing in your own education and growth, you will not only enhance your teaching skills but also inspire and motivate your students.</p>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p>Becoming a yoga instructor is a fulfilling and rewarding journey. It requires dedication, commitment, and a genuine passion for yoga. Start by choosing a reputable yoga teacher training program that aligns with your values and teaching style. Gain teaching experience and obtain a yoga alliance certification to establish yourself as a professional. Continuously develop your teaching skills, build your brand, and effectively market yourself as a yoga instructor. Seek out teaching opportunities and invest in continuing education to stay at the forefront of the yoga industry. By taking these steps, you will be well on your way to becoming a successful yoga instructor, inspiring others through the practice of yoga.</p>', 'Demand for Yoga Instructors | Steps to Becoming a Yoga Instructor', 'Demand for Yoga Instructors', '‍‍Are you passionate about yoga and want to share your knowledge and help others in their wellness journey? Becoming a yoga instructor might be the perfect path for you! In this article, we will explore the steps you need to take to become a certified yoga instructor and start teaching classes that inspire and transform lives.', '0', '0', 1, '2023-10-07 01:01:34', '2023-10-09 04:15:12'),
(17, NULL, NULL, NULL, 'Paschimottanasana: Benefits, Preparations, Steps, Mistakes', 'paschimottanasana-benefits-preparations-steps-mistakes', '/upload/blog/6523cc51135a0blog2.webp', 'Paschimottanasana', NULL, '<p>&zwj;Introducing the Paschimottanasana, a blissful yoga pose that will transport your body and mind to a place of deep relaxation. This seated forward bend is perfect for those seeking a therapeutic escape from the chaos of everyday life. In just a few minutes, this transformative asana can release tension in your back, hamstrings, and shoulders, while also calming the nervous system and soothing the mind.</p>\r\n\r\n<p>As you surrender into the gentle stretch, feel the energy flowing through your body, revitalizing and rejuvenating every cell. The Paschimottanasana, also known as the Seated Forward Bend, is a beautiful posture that promotes flexibility, improves digestion, and stimulates the abdominal organs.</p>\r\n\r\n<p>Whether you&rsquo;re a seasoned yogi or just beginning your yoga journey, the Paschimottanasana welcomes practitioners of all levels. So grab a mat, find a quiet space, and embrace the serenity and peace that this powerful pose offers. Join us as we explore the secrets and benefits of this timeless asana. Get ready to experience a new level of relaxation and wellness through the transformative practice of Paschimottanasana.</p>\r\n\r\n<h2>Benefits of Paschimottanasana</h2>\r\n\r\n<p>The Paschimottanasana, or Seated Forward Bend, offers a multitude of benefits for the mind, body, and spirit. Let&rsquo;s delve into the incredible advantages this asana provides.</p>\r\n\r\n<ol>\r\n	<li><strong>Improved Flexibility: </strong>Paschimottanasana stretches the entire posterior chain, including the spine, hamstrings, and calves. Regular practice gradually increases flexibility, allowing you to deepen the forward fold and experience a greater range of motion.</li>\r\n	<li><strong>Relief from Back Pain: </strong>Sitting for long periods can lead to tightness and discomfort in the lower back. Paschimottanasana helps alleviate back pain by stretching the muscles and ligaments in the back, promoting proper alignment and relieving tension.</li>\r\n	<li><strong>Enhanced Digestion: </strong>This asana stimulates the abdominal organs, including the liver, kidneys, and pancreas. The gentle compression and massage of these organs improve digestion, alleviate constipation, and promote overall digestive health.</li>\r\n	<li><strong>Calms the Nervous System: </strong>The forward bend in Paschimottanasana activates the parasympathetic nervous system, triggering the relaxation response. This helps reduce stress, anxiety, and fatigue, while promoting a sense of calm and tranquility.</li>\r\n	<li><strong>Soothes the Mind: </strong>As you fold forward in Paschimottanasana, the mind naturally turns inward. This introspective aspect of the pose helps quiet the mind, promote mindfulness, and cultivate a sense of inner peace.</li>\r\n</ol>\r\n\r\n<h3>Preparing for Paschimottanasana</h3>\r\n\r\n<p>Before diving into Paschimottanasana, it&rsquo;s essential to prepare your body and mind for this transformative pose. Follow these steps to ensure a safe and effective practice.</p>\r\n\r\n<ul>\r\n	<li>Warm-up: Begin with a gentle warm-up to prepare your body for the deeper stretches. Incorporate movements such as Cat-Cow, Sun Salutations, or gentle twists to awaken your spine and loosen up your muscles.</li>\r\n	<li>Loosen the Hamstrings: Tight hamstrings can make it challenging to fold forward comfortably. Prioritize hamstring stretches such as Standing Forward Bend (Uttanasana) or Downward-Facing Dog (Adho Mukha Svanasana) to gradually lengthen and release tension in the back of your legs.</li>\r\n	<li>Props: If you struggle to reach your toes or experience discomfort in the pose, consider using props. A yoga strap, folded blanket, or bolster can provide support, allowing you to maintain proper alignment and ease into the pose gradually.</li>\r\n</ul>\r\n\r\n<p>Remember, each body is unique, and it&rsquo;s important to listen to your body&rsquo;s limitations. Honor where you are in your practice and avoid pushing beyond your limits to prevent injury.</p>\r\n\r\n<h3>Step-by-step Guide to Performing Paschimottanasana</h3>\r\n\r\n<p>Now that you&rsquo;re prepared, it&rsquo;s time to explore the step-by-step process of performing Paschimottanasana. Follow these instructions to experience the full benefits of this rejuvenating pose.</p>\r\n\r\n<ul>\r\n	<li>Sit on your mat: Begin by sitting on your mat with your legs extended in front of you. Ensure your spine is straight, and your sit bones are grounded firmly on the mat.</li>\r\n	<li>Activate your legs: Engage your quadriceps and flex your feet, pressing your heels into the mat. This action helps to activate the leg muscles and protect the knees.</li>\r\n	<li>Inhale and lengthen: As you inhale, elongate your spine, lifting your chest and reaching the crown of your head towards the ceiling. Feel a gentle stretch along the front of your body.</li>\r\n	<li>Exhale and fold forward: On your exhale, initiate the forward fold from your hips, leading with your heart. Maintain a long spine as you fold, avoiding rounding your back.</li>\r\n	<li>Reach for your feet: Once you have reached your maximum forward fold, extend your arms forward and reach for your feet. If you can&rsquo;t reach your feet comfortably, use a strap or hold onto your ankles or shins.</li>\r\n	<li>Relax into the pose: As you hold the forward fold, allow your body to relax and surrender. Soften your shoulders, jaw, and face. Release any tension you may be holding in your body.</li>\r\n	<li>Breathe deeply: Take slow, deep breaths while in the pose. With each inhale, imagine lengthening your spine, and with each exhale, surrendering deeper into the stretch.</li>\r\n	<li>Hold the pose: Stay in Paschimottanasana for 5-10 breaths or longer, depending on your comfort level. Remember to listen to your body and adjust the intensity of the stretch accordingly.</li>\r\n	<li>Release the pose: To come out of the pose, slowly release your grip on your feet and inhale as you lengthen your spine. On your exhale, gently return to an upright seated position.</li>\r\n</ul>\r\n\r\n<h3>Common Mistakes and How to Avoid Them in Paschimottanasana</h3>\r\n\r\n<p>While Paschimottanasana offers numerous benefits, it&rsquo;s crucial to practice with proper alignment to avoid strain or injury. Here are some common mistakes to be aware of and how to avoid them.</p>\r\n\r\n<ul>\r\n	<li>Rounding the back: One of the most common mistakes in Paschimottanasana is rounding the back. This can strain the spine and limit the effectiveness of the pose. Instead, focus on maintaining a long spine, hinging from the hips, and leading with your heart as you fold forward.</li>\r\n	<li>Forcing the stretch: It&rsquo;s important to avoid forcing your body into a deep fold. Pushing beyond your limits can lead to injury or strain. Instead, practice patience and allow your body to gradually open up over time. Use props to support your body and maintain a safe range of motion.</li>\r\n	<li>Tension in the neck and shoulders: Many practitioners tend to hold tension in the neck and shoulders during Paschimottanasana. To avoid this, consciously relax your shoulders away from your ears and release any tension in your neck. Focus on softening these areas as you fold forward.</li>\r\n</ul>\r\n\r\n<p>Remember, yoga is a journey, and progress comes with consistent practice and mindfulness. Embrace the process and be gentle with yourself as you explore Paschimottanasana.</p>\r\n\r\n<h3>Modifications and Variations</h3>\r\n\r\n<p>Paschimottanasana can be modified and adapted to accommodate practitioners of all levels. Here are a few variations to explore based on your individual needs and abilities.</p>\r\n\r\n<ul>\r\n	<li>Bent Knee Variation: If you have tight hamstrings or lower back issues, try practicing Paschimottanasana with bent knees. This modification helps reduce strain on the lower back and allows you to focus on the forward fold without compromising your comfort.</li>\r\n	<li>Supported Variation: For those who struggle to reach their feet comfortably, utilize props to support your practice. Place a bolster or folded blanket on your legs and rest your forearms or hands on the prop. This modification provides extra support and allows for a more relaxed forward fold.</li>\r\n	<li>One-leg Variation: If you&rsquo;re looking to deepen the stretch in one leg at a time, try the one-leg variation of Paschimottanasana. Extend one leg forward while bending the other knee, placing the sole of the foot against the inner thigh of the extended leg. Fold forward over the extended leg, focusing on the stretch in that specific hamstring.</li>\r\n</ul>\r\n\r\n<p>Always listen to your body and choose the variation that feels right for you. Don&rsquo;t hesitate to seek guidance from a qualified yoga teacher to ensure proper alignment and modifications tailored to your needs.</p>\r\n\r\n<h3>Tips for Improving Flexibility in Paschimottanasana</h3>\r\n\r\n<p>Flexibility is a key aspect of Paschimottanasana, and with consistent practice, you can gradually deepen your forward fold. Here are some tips to help improve your flexibility in this rejuvenating pose.</p>\r\n\r\n<ul>\r\n	<li>Practice regularly: Consistency is key when it comes to improving flexibility. Dedicate regular time to Paschimottanasana, whether it&rsquo;s a few minutes every day or longer sessions a few times a week. With time, you&rsquo;ll notice significant progress.</li>\r\n	<li>Warm-up: Prior to practicing Paschimottanasana, incorporate a dynamic warm-up routine to prepare your body for deeper stretches. Engage in movements that target the spine, hamstrings, and hips to increase blood flow and warm up the muscles.</li>\r\n	<li>Use props: Props such as blocks, straps, or blankets can assist in improving flexibility. Utilize blocks under your hands or a strap around your feet to gradually deepen your forward fold. These props provide support and help you maintain proper alignment as you work on your flexibility.</li>\r\n	<li>Engage in complementary exercises: In addition to regular yoga practice, consider incorporating exercises that specifically target the hamstrings and lower back. Pilates, swimming, or specific stretching routines can aid in improving overall flexibility, making Paschimottanasana more accessible.</li>\r\n</ul>\r\n\r\n<p>Remember, progress takes time, so be patient with yourself. Celebrate small improvements along the way and enjoy the journey toward increased flexibility.</p>\r\n\r\n<h3>Precautions and Contraindications&nbsp;</h3>\r\n\r\n<p>While Paschimottanasana offers numerous benefits, it may not be suitable for everyone. It&rsquo;s important to be aware of any contraindications or safety precautions before practicing this asana. If you have any underlying health conditions or injuries, consult with a healthcare professional or yoga teacher before attempting Paschimottanasana.</p>\r\n\r\n<ul>\r\n	<li>Back injuries: If you have a current or past back injury, approach Paschimottanasana with caution. Work with a knowledgeable yoga teacher to modify the pose according to your specific condition and avoid any movements that aggravate your injury.</li>\r\n	<li>Pregnancy: Pregnant individuals should avoid deep forward folds like Paschimottanasana, particularly during the second and third trimesters. Instead, opt for more suitable prenatal yoga poses that cater to the changing needs of your body.</li>\r\n	<li>High blood pressure: If you have high blood pressure, practice Paschimottanasana with caution. Avoid straining or forcefully folding forward, as this can raise blood pressure. Instead, focus on a gentle forward fold with the support of props and listen to your body&rsquo;s cues.</li>\r\n</ul>\r\n\r\n<p>Always prioritize your safety and well-being during your yoga practice. If at any point you experience pain or discomfort, ease out of the pose and seek guidance from a qualified professional.</p>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p>In the fast-paced world we live in, finding moments of serenity and relaxation is vital for our overall well-being. Paschimottanasana, the Seated Forward Bend, offers a doorway to tranquility, releasing tension in the body and calming the mind.</p>\r\n\r\n<p>Through regular practice, Paschimottanasana enhances flexibility, improves digestion, and stimulates the abdominal organs. It provides relief from back pain, reduces stress, and cultivates a sense of inner peace. This asana is a powerful tool for reconnecting with ourselves and finding balance amidst the chaos of everyday life.</p>\r\n\r\n<p>Whether you&rsquo;re a beginner or an experienced yogi, Paschimottanasana welcomes practitioners of all levels. Embrace the journey this asana offers, and allow it to guide you towards a state of deep relaxation and wellness. With each forward fold, may you find a sanctuary within yourself, and may the practice of Paschimottanasana bring you closer to a harmonious body and mind.</p>\r\n\r\n<p>So, roll out your mat, find a quiet space, and embark on the transformative practice of Paschimottanasana. Discover the beauty of surrender, the power of stillness, and the profound benefits this timeless asana has to offer.</p>', 'Paschimottanasana: Benefits, Preparations, Steps, Mistakes', 'Paschimottanasana', '‍Introducing the Paschimottanasana, a blissful yoga pose that will transport your body and mind to a place of deep relaxation. This seated forward bend is perfect for those seeking a therapeutic escape from the chaos of everyday life. In just a few minutes, this transformative asana can release tension in your back, hamstrings, and shoulders, while also calming the nervous system and soothing the mind.', '0', '0', 1, '2023-10-09 04:18:01', '2023-10-09 04:18:01'),
(18, NULL, NULL, NULL, 'Inner Thigh Stretches: Improving Flexibility and Preventing Injury', 'inner-thigh-stretches-improving-flexibility-and-preventing-injury', '/upload/blog/6523ccda40f60blog3.webp', 'Inner Thigh Stretches', 'Inner Thigh Stretches, Improving Flexibility, Preventing Injury', '<p>&zwj;Looking to stretch and strengthen your inner thighs stretches ? Look no further! In this article, we will explore effective and safe exercises specifically targeting the inner thigh muscles. Having tight or weak inner thigh muscles can lead to discomfort, limited range of motion, and even injury. By incorporating targeted stretches into your fitness routine, you can improve flexibility, prevent imbalances, and enhance overall athletic performance.</p>\r\n\r\n<h3>Importance of stretching the inner thighs</h3>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/upload/ckeditor/6526977301306event-img.png\" style=\"height:523px; width:540px\" /></p>\r\n\r\n<p>Stretching the inner thighs is crucial for maintaining a balanced and healthy body. The inner thigh muscles, also known as the adductors, play a significant role in stabilizing the hips, pelvis, and knees. When these muscles are tight or weak, it can lead to imbalances and compensations in other areas of the body, causing pain and limited movement.</p>\r\n\r\n<p>By regularly stretching the inner thighs, you can improve flexibility and range of motion in the hip joint. This increased mobility not only enhances athletic performance but also reduces the risk of injuries, such as groin strains and hip impingements. Additionally, stretching the inner thighs can help improve posture and alleviate lower back pain by promoting proper alignment of the pelvis.</p>\r\n\r\n<h3>Benefits of inner thigh stretches</h3>\r\n\r\n<p>Incorporating inner thigh stretches into your fitness routine offers numerous benefits beyond flexibility. By engaging these muscles, you can enhance your overall athletic performance and functional movement patterns. Here are some key benefits of regularly practicing inner thigh stretches:</p>\r\n\r\n<ol>\r\n	<li>Improved flexibility:&nbsp;Stretching the inner thighs helps lengthen the adductor muscles, allowing for a greater range of motion in the hips and pelvis. This increased flexibility can improve performance in activities that require a wide stance or lateral movement, such as dancing, martial arts, and sports like soccer or basketball.</li>\r\n	<li>Injury prevention:&nbsp;Tight inner thigh muscles can contribute to imbalances in the lower body, leading to strain and injury. By maintaining flexibility in the adductors, you can reduce the risk of hip, groin, and knee injuries. This is especially important for athletes who engage in activities that involve quick changes in direction or repetitive lateral movements.</li>\r\n	<li>Enhanced muscle activation:&nbsp;Stretching the inner thighs can activate and strengthen the adductor muscles, improving their ability to stabilize the hips and pelvis during movement. This can enhance overall athletic performance and functional movements, such as squatting, lunging, and jumping.</li>\r\n	<li>Improved posture:&nbsp;Tight inner thighs can contribute to postural imbalances, leading to poor alignment of the pelvis and lower back. Regularly stretching these muscles can help maintain proper posture, alleviating lower back pain and reducing the risk of spinal injuries.</li>\r\n</ol>\r\n\r\n<h3>Common causes of tight inner thighs</h3>\r\n\r\n<p>Before diving into the stretches, it&rsquo;s essential to understand the common causes of tight inner thighs. Identifying these factors can help you address the root cause of tightness and prevent future imbalances. Here are some common causes of tight inner thigh muscles:</p>\r\n\r\n<ul>\r\n	<li>Sedentary lifestyle:&nbsp;Sitting for extended periods, such as during desk jobs or long commutes, can lead to tightness in the inner thighs. Lack of movement and prolonged sitting can cause the adductor muscles to become shortened and stiff.</li>\r\n	<li>Overuse or repetitive movements:&nbsp;Engaging in activities that involve repetitive hip adduction movements, such as running, cycling, or dancing, can cause the inner thighs to become tight. These repetitive motions without proper stretching and recovery can lead to muscle imbalances and tightness.</li>\r\n	<li>Lack of stretching:&nbsp;Failing to incorporate stretching exercises into your fitness routine can contribute to tightness in the inner thighs. Stretching is essential for maintaining muscle length and preventing muscular imbalances.</li>\r\n	<li>Muscle imbalances:&nbsp;Weakness in opposing muscle groups, such as the outer hip abductors, can lead to compensations and tightness in the inner thighs. It&rsquo;s crucial to maintain balance between muscle groups to prevent overuse and tightness.</li>\r\n</ul>\r\n\r\n<h3>Preparing for inner thigh stretches</h3>\r\n\r\n<p>Before diving into the inner thigh stretches, it&rsquo;s essential to prepare your body for optimal stretching. Follow these steps to ensure a safe and effective stretching session:</p>\r\n\r\n<ul>\r\n	<li>Warm-up:&nbsp;Before stretching, warm up your body with light cardio exercises, such as jogging or jumping jacks, to increase blood flow to the muscles and prepare them for stretching.</li>\r\n	<li>Dynamic stretching:&nbsp;Incorporate dynamic stretches that target the lower body, such as leg swings or hip circles, to further warm up the muscles and increase their flexibility.</li>\r\n	<li>Proper form:&nbsp;Pay attention to your posture and body alignment during stretches. Maintain a neutral spine, engage your core, and avoid any excessive bouncing or jerking movements that can lead to injury.</li>\r\n	<li>Breathing:&nbsp;Breathe deeply and relax into each stretch. Exhale as you deepen the stretch, allowing your muscles to release tension.</li>\r\n	<li>Progress gradually:&nbsp;Start with easier stretches and gradually progress to more advanced ones as your flexibility improves. Avoid pushing yourself too hard and listen to your body&rsquo;s limits.</li>\r\n</ul>\r\n\r\n<p>Now that you&rsquo;re warmed up and prepared, let&rsquo;s explore a variety of inner thigh stretches suitable for all levels of fitness.</p>\r\n\r\n<h3>Basic inner thigh stretches for beginners</h3>\r\n\r\n<ul>\r\n	<li>Butterfly Stretch:&nbsp;Sit on the floor and bring the soles of your feet together, allowing your knees to fall out to the sides. Gently press your knees down towards the floor while keeping your back straight. Hold this stretch for 30 seconds to 1 minute, focusing on feeling the stretch in your inner thighs. Repeat 3-5 times.</li>\r\n	<li>Lunge Stretch:&nbsp;Start in a lunge position with your right foot forward and your left knee on the ground. Slowly shift your weight forward, feeling the stretch in your inner thigh. Hold for 30 seconds and then switch sides. Repeat 3-5 times on each side.</li>\r\n	<li>Standing Straddle Stretch:&nbsp;Stand with your feet wider than hip-width apart. Slowly hinge forward at the hips, reaching your hands towards the floor. Feel the stretch in your inner thighs and hold for 30 seconds. Repeat 3-5 times.</li>\r\n</ul>\r\n\r\n<p>Remember to breathe deeply and relax into each stretch. Gradually increase the intensity of the stretch as your flexibility improves.</p>\r\n\r\n<h3>Advanced inner thigh stretches for flexibility</h3>\r\n\r\n<p>As you progress in your stretching routine, you can incorporate more challenging stretches to further improve flexibility in your inner thighs. Here are some advanced inner thigh stretches to try:</p>\r\n\r\n<ul>\r\n	<li>Seated Straddle Stretch:&nbsp;Sit on the floor with your legs spread wide apart. Slowly walk your hands forward, hinging at the hips, until you feel a stretch in your inner thighs. Hold this position for 30 seconds to 1 minute, focusing on deepening the stretch with each breath. Repeat 3-5 times.</li>\r\n	<li>Frog Pose:&nbsp;Start on your hands and knees, then slowly widen your knees apart as far as comfortable. Lower your forearms to the ground and allow your hips to sink towards the floor. Hold this pose for 30 seconds to 1 minute, feeling the stretch in your inner thighs. Repeat 3-5 times.</li>\r\n	<li>Side Lunge Stretch:&nbsp;Stand with your feet wider than hip-width apart. Take a wide step to the right, bending your right knee and keeping your left leg straight. Sink into the lunge, feeling the stretch in your inner thigh. Hold for 30 seconds and then switch sides. Repeat 3-5 times on each side.</li>\r\n</ul>\r\n\r\n<p>These advanced stretches require a greater level of flexibility and should only be attempted once you have mastered the basic stretches and have built up sufficient strength and flexibility in your inner thighs.</p>\r\n\r\n<h3>Tips for getting the most out of your inner thigh stretches</h3>\r\n\r\n<p>To maximize the benefits of your inner thigh stretches, keep the following tips in mind:</p>\r\n\r\n<ul>\r\n	<li>Consistency is key:&nbsp;Regularly practice these stretches to see significant improvements in your flexibility and range of motion. Aim for at least three stretching sessions per week.</li>\r\n	<li>Listen to your body:&nbsp;Avoid pushing yourself too hard or forcing a stretch beyond your comfort zone. Respect your body&rsquo;s limits and progress gradually.</li>\r\n	<li>Combine with other stretches:&nbsp;Incorporate stretches that target other muscle groups, such as the hips, hamstrings, and glutes, to maintain overall muscle balance and prevent imbalances.</li>\r\n	<li>Hold each stretch:&nbsp;Aim to hold each stretch for at least 30 seconds to 1 minute. This allows the muscles to fully relax and lengthen.</li>\r\n	<li>Stretch after workouts:&nbsp;Perform these stretches after your regular workout sessions when your muscles are warm and more pliable.</li>\r\n</ul>\r\n\r\n<p>Remember to always consult with a healthcare professional or a certified fitness instructor before starting any new exercise or stretching routine, especially if you have any pre-existing injuries or medical conditions.</p>\r\n\r\n<h3>Incorporating inner thigh stretches into your workout routine</h3>\r\n\r\n<p>To make the most of your inner thigh stretches, consider incorporating them into your existing workout routine. Here are some ideas on how to integrate these stretches:</p>\r\n\r\n<ul>\r\n	<li>Pre-workout warm-up:&nbsp;Perform a few dynamic stretches that target the inner thighs before your regular workout to warm up the muscles and increase their flexibility.</li>\r\n	<li>In-between exercises:&nbsp;Take short stretching breaks between exercises to release tension in the inner thighs and maintain flexibility throughout your workout.</li>\r\n	<li>Post-workout cooldown:&nbsp;After your workout, dedicate a few minutes to stretch the inner thighs and other muscle groups to promote muscle recovery and prevent tightness.</li>\r\n</ul>\r\n\r\n<p>By integrating these stretches into your workout routine, you can ensure that your inner thigh muscles are properly stretched, preventing imbalances and improving overall flexibility.</p>\r\n\r\n<h3>Other exercises that complement inner thigh stretches</h3>\r\n\r\n<p>While inner thigh stretches are essential for targeting the adductor muscles, it&rsquo;s also important to engage in exercises that complement these stretches. Strengthening the surrounding muscle groups can further enhance stability and prevent imbalances. Here are some exercises that complement inner thigh stretches:</p>\r\n\r\n<ul>\r\n	<li>Hip Abductor Exercises:&nbsp;Engage in exercises that target the outer hip abductor muscles, such as side leg lifts or clamshells. These exercises help strengthen the muscles that oppose the inner thighs, maintaining muscle balance.</li>\r\n	<li>Core Strengthening:&nbsp;A strong core helps stabilize the pelvis and lower back, reducing strain on the inner thigh muscles. Incorporate exercises like planks, Russian twists, or bicycle crunches to strengthen your core.</li>\r\n	<li>Compound Lower Body Exercises:&nbsp;Exercises like squats, lunges, and deadlifts engage multiple muscle groups, including the inner thighs. These exercises not only strengthen the lower body but also improve overall functional movement patterns.</li>\r\n</ul>\r\n\r\n<p>By incorporating these complementary exercises into your fitness routine, you can enhance the effectiveness of your inner thigh stretches and promote overall muscle balance.</p>\r\n\r\n<h3>Conclusion:&nbsp;</h3>\r\n\r\n<p>Incorporating inner thigh stretches into your fitness routine offers countless benefits, from improved flexibility and enhanced athletic performance to injury prevention and better posture. By regularly practicing these stretches, you can lengthen and strengthen the inner thigh muscles, reducing the risk of imbalances and discomfort.</p>\r\n\r\n<p>Remember to warm up before stretching, progress gradually, and listen to your body&rsquo;s limits. Consistency is key, so aim to incorporate these stretches into your routine at least three times a week. Combine them with other stretches and complementary exercises to maintain overall muscle balance.</p>\r\n\r\n<p>Stretching your inner thighs not only improves your physical well-being but also enhances your overall quality of life. So, why wait? Start implementing these stretches today and experience the incredible benefits of flexible and strong inner thighs.</p>', 'Inner Thigh Stretches: Improving Flexibility and Preventing Injury', 'Inner Thigh Stretches', '‍Looking to stretch and strengthen your inner thighs stretches ? Look no further! In this article, we will explore effective and safe exercises specifically targeting the inner thigh muscles. Having tight or weak inner thigh muscles can lead to discomfort, limited range of motion, and even injury. By incorporating targeted stretches into your fitness routine, you can improve flexibility, prevent imbalances, and enhance overall athletic performance.', '0', '0', 1, '2023-10-09 04:20:18', '2023-10-11 07:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `bookingforms`
--

CREATE TABLE `bookingforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentmode` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'full=0, partial=1\r\n',
  `paymentmethod` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'paypal = 1, razorpay=1',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=>Pending, 1=>Paid, 2=>Rejected\r\n',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookingforms`
--

INSERT INTO `bookingforms` (`id`, `course_id`, `room`, `date`, `name`, `email`, `country`, `phone`, `price`, `message`, `paymentmode`, `paymentmethod`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, 'shared3room', '4', 'Himanshu Singh', 'himanshuadmin@gmail.com', 'India (भारत)', '7412589630', '105', 'test', 1, 1, 0, '2023-10-27 23:51:21', '2023-10-27 23:51:21'),
(6, 1, 'shared3room', '4', 'Himanshu Singh', 'himanshuadmin@gmail.com', 'India (भारत)', '7412589630', '105', 'test', 1, 1, 0, '2023-10-27 23:53:40', '2023-10-27 23:53:40'),
(9, 1, 'shared3room', '5', 'himanshi', 'himanhsi', 'United States', '7894564545', '105', 'test', 1, 1, 0, '2023-10-27 23:59:35', '2023-10-27 23:59:35'),
(10, 1, 'shared3room', '7', 'himanshi', 'himanshuheart96@gmail.com', 'India (भारत)', '7412589635', '699', 'test', 0, 0, 0, '2023-10-28 01:02:28', '2023-10-28 01:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metakeyword` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadescription` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `formstatus` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoryfaqs`
--

CREATE TABLE `categoryfaqs` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawktourl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawkto` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `consultdate` date DEFAULT NULL,
  `consulttime` time DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursecurriculams`
--

INSERT INTO `coursecurriculams` (`id`, `course_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(16, 4, 'Advanced Asana Practice (Hatha & Ashtanga Vinyasa):', '<ul><li>In-depth exploration of Hatha and Ashtanga Vinyasa yoga asanas (postures).</li><li>Advanced variations, modifications, and adjustments.</li><li>Refinement of alignment principles and sequencing.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(17, 4, 'Pranayama and Breathwork:', '<ul><li>Advanced pranayama techniques and their application.</li><li>Breath awareness and control.</li><li>Incorporating pranayama into Hatha and Ashtanga classes.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(18, 4, 'Meditation and Mindfulness:', '<ul><li>Advanced meditation techniques.</li><li>Mindfulness and its application to yoga.</li><li>Teaching meditation and mindfulness to students.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(19, 4, 'Yoga Philosophy and History:', '<ul><li>Deep dive into yoga philosophy texts (e.g., Bhagavad Gita, Yoga Sutras of Patanjali).</li><li>Comparative study of Hatha and Ashtanga yoga philosophies.</li><li>Ethical principles and living a yogic lifestyle (yamas and niyamas).</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(20, 4, 'Anatomy and Physiology:', '<ul><li>Advanced study of human anatomy relevant to yoga practice.</li><li>Biomechanics of Hatha and Ashtanga yoga poses.</li><li>Injury prevention and management.</li><li>In-depth understanding of alignment in Hatha and Ashtanga poses.</li><li>Alignment for injury prevention and therapeutic applications.</li><li>Adapting poses to individual anatomical differences.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(21, 4, 'Teaching Methodology:', '<ul><li>Advanced teaching techniques and pedagogy.</li><li>Designing and leading advanced Hatha and Ashtanga yoga classes.</li><li>Working with diverse student populations and needs.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(22, 4, 'Adjustments and Assists:', '<ul><li>Advanced adjustments and assists for Hatha and Ashtanga poses.</li><li>Hands-on techniques for safe and effective guidance.</li><li>Ethical considerations in physical adjustments.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(23, 4, 'Advanced Sequencing:', '<ul><li>Advanced class sequencing for Hatha and Ashtanga yoga.</li><li>Developing themed and specialized classes.</li><li>Progressive sequencing for different levels of students.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(24, 4, 'Practicum and Teaching Experience: -', '<ul><li>Teaching practice sessions with feedback.</li><li>Assisting and observing other teachers.</li><li>Developing your unique teaching style.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(25, 4, 'Business and Ethics', '<ul><li>Marketing and running a successful yoga business.&nbsp;</li><li>Legal and ethical considerations for yoga professionals.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(26, 4, 'Final Assessment and Certification', '<ul><li>Typically, a final examination and teaching practicum.</li><li>Graduation and certification as a 300-Hour Yoga Teacher.</li></ul>', '2023-10-28 07:09:10', '2023-10-28 07:09:10'),
(27, 5, 'Hatha yoga Practice:', '<ul><li>In-depth exploration of Hatha yoga asanas (postures).</li><li>Learning and practicing a wide range of yoga postures, including standing, seated, forward bends, backbends, inversions, and twists.</li><li>Emphasis on proper alignment, adjustments, and modifications to accommodate different body types and abilities.</li><li>Sequencing Hatha yoga classes for different levels.</li><li>Advanced variations, modifications, and adjustments.</li><li>Refinement of alignment principles and sequencing.</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(28, 5, 'Ashtanga Yoga Practice:', '<ul><li>Detailed study and practice of the Ashtanga Primary Series and Secondary series including the specific sequence of asanas and vinyasas (movement-breath coordination).</li><li>Mysore-style practice and self-practice techniques.</li><li>Understanding the foundational principles of Ashtanga yoga as outlined in Patanjali\'s Yoga Sutras.</li><li>Exploration of the eight limbs of Ashtanga yoga, with an emphasis on the first two limbs (yamas and niyamas).</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(29, 5, 'Pranayama and Breathwork:', '<ul><li>Beginner to advanced pranayama techniques and their application.</li><li>Breath awareness and control.</li><li>Incorporating pranayama into Hatha and Ashtanga classes.</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(30, 5, 'Meditation and Mindfulness:', '<ul><li>Beginner to advanced meditation techniques.</li><li>Mindfulness and its application to yoga.</li><li>Teaching meditation and mindfulness to students</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(31, 5, 'Yoga Philosophy and History:', '<ul><li>Deep dive into yoga philosophy texts (e.g., Bhagavad Gita, Yoga Sutras of Patanjali).</li><li>Comparative study of Hatha and Ashtanga yoga philosophies.</li><li>Ethical principles and living a yogic lifestyle (yamas and niyamas).</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(32, 5, 'Anatomy and Physiology:', '<ul><li>Advanced study of human anatomy relevant to yoga practice.</li><li>Biomechanics of Hatha and Ashtanga yoga poses.</li><li>Injury prevention and management.</li><li>In-depth understanding of alignment in Hatha and Ashtanga poses.</li><li>Alignment for injury prevention and therapeutic applications.</li><li>Adapting poses to individual anatomical differences.</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(33, 5, 'Teaching Methodology:', '<ul><li>Advanced teaching techniques and pedagogy.</li><li>Designing and leading advanced Hatha and Ashtanga yoga classes.</li><li>Working with diverse student populations and needs.</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(34, 5, 'Alignment, Adjustments and Sequencing', '<ul><li>Advanced adjustments and assists for Hatha and Ashtanga poses.</li><li>Hands-on techniques for safe and effective guidance.</li><li>Ethical considerations in physical adjustments.</li><li>Advanced class sequencing for Hatha and Ashtanga yoga.</li><li>Developing themed and specialized classes.</li><li>Progressive sequencing for different levels of students.</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(35, 5, 'Practicum and Teaching Experience', '<ul><li>Teaching practice sessions with feedback.</li><li>Assisting and observing other teachers. - Developing your unique teaching style.</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(36, 5, 'Final Assessment and Certification', '<ul><li>Typically, a final examination and teaching practicum</li><li>Graduation and certification as a 500-Hour Hatha and Ashtanga Yoga Teacher.</li></ul>', '2023-10-28 07:20:10', '2023-10-28 07:20:10'),
(37, 1, 'Hatha Yoga Asanas (Postures):', '<p></p><p><ul></ul></p><ul><li>In-depth study and practice of Hatha yoga asanas, including alignment, benefits, and variations.</li><li>Learning and practicing a wide range of yoga postures, including standing, seated, forward bends, backbends, inversions, and twists.</li><li>Emphasis on proper alignment, adjustments, and modifications to accommodate different body types and abilities.</li><li>Sequencing Hatha yoga classes for different levels.</li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(38, 1, 'Ashtanga Yoga:', '<ul><li>Detailed study and practice of the Ashtanga Primary Series, including the specific sequence of asanas and vinyasas (movement-breath coordination).<br></li><li>Mysore-style practice and self-practice techniques.</li><li>Understanding the foundational principles of Ashtanga yoga as outlined in Patanjali\'s Yoga Sutras.</li><li>Exploration of the eight limbs of Ashtanga yoga, with an emphasis on the first two limbs (yamas and niyamas).</li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(39, 1, 'Pranayama (Breath Control)', '<p></p><p><ul></ul></p><ul><li>Exploration of various pranayama techniques specific to Hatha yoga.</li><li>Integrating breath control into the practice and teaching.</li><li>Instruction in various pranayama techniques to improve breath awareness, control, and energy management.</li><li>How to incorporate pranayama into yoga classes for enhanced practice.</li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(40, 1, 'Meditation:', '<ul><li>Introduction to Hatha yoga meditation techniques.</li><li>Different types of Meditation techniques</li><li>Incorporating relaxation and meditation into Hatha yoga sessions.</li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(41, 1, 'Yoga Philosophy:', '<ul><li><li>Study of classical yoga texts like the Yoga Sutras and the Bhagavad Gita.</li><li>Discussions on the philosophy and ethics of yoga.</li></li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(42, 1, 'Anatomy and Physiology:', '<ul><li><li>Detailed examination of anatomy relevant to Hatha and Ashtanga yoga practice.</li><li>How yoga affects the muscular, skeletal, and respiratory systems.</li></li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(43, 1, 'Teaching Methodology:', '<ul><li><li>Learning the art of teaching Hatha and Ashtanga yoga, including effective cueing, hands-on adjustments, and the art of sequencing.</li><li>Practice teaching sessions with peer and instructor feedback.</li></li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(44, 1, 'Chanting and Mantras:', '<ul><li><li>Introduction to Sanskrit chanting and mantras in the context of Hatha and Ashtanga yoga.</li><li>Chanting of traditional mantras for grounding and spiritual connection.</li></li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(45, 1, 'Practical Teaching Experience:', '<ul><li><li>Opportunities to teach segments of yoga classes and receive feedback from instructors and peers.</li><li>Supervised teaching practice to develop teaching skills.</li></li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(46, 1, 'Yogic Lifestyle and Ethics:', '<ul><li>Exploration of the yogic way of life, including ethical guidelines for yoga teachers.</li><li>Discussions on maintaining professionalism and appropriate teacher-student relationships.</li></ul>', '2023-10-30 22:44:41', '2023-10-30 22:44:41'),
(47, 6, 'Kundalini Yoga Philosophy:', '<ul><li>Study of Kundalini Yoga philosophy and its roots in traditional yoga and Sikhism.</li><li>Understanding the concept of Kundalini energy, chakras, and their significance.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(48, 6, 'Kundalini Yoga Practices:', '<ul><li>Kundalini Yoga asanas (postures) designed to facilitate the flow of Kundalini energy.</li><li>Understanding the alignment and benefits of Kundalini Yoga postures.</li><li>In-depth exploration and practice of Kundalini Yoga kriyas (specific sequences of postures, breathwork, and sound) for various purposes, such as awakening energy, balancing the chakras, and promoting physical and mental well-being.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(49, 6, 'Meditation and Mantras:', '<ul><li>Introduction to Kundalini meditation techniques, including mantra meditation.</li><li>Learning and chanting Kundalini mantras (sound vibrations) and their effects.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(50, 6, 'Pranayama and Breathwork:', '<ul><li>Study and practice of specific Kundalini pranayama techniques for energy control and mental clarity.</li><li>Incorporating breathwork into Kundalini Yoga sessions.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(51, 6, 'Anatomy and Physiology : Energetic Anatomy:', '<ul><li>Exploration of the subtle body, including the nadis (energy channels) and chakras (energy centers).</li><li>How Kundalini Yoga affects the energetic and physiological aspects of the body.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(52, 6, 'Anatomy and Physiology : Physical Anatomy:', '<ul><li>An overview of basic human anatomy and physiology relevant to Kundalini Yoga practice.</li><li>Understanding the body\'s physical responses during Kundalini Yoga practice.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(53, 6, 'Teaching Methodology: Effective Teaching Skills:', '<ul><li>Learning the art of teaching Kundalini Yoga, including class sequencing, instructions, and maintaining a safe and sacred space.</li><li>Practicing teaching Kundalini Yoga kriyas and meditations.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(54, 6, 'Teaching Methodology:  Ethics and Professionalism:', '<ul><li>Exploring ethical guidelines for Kundalini Yoga teachers.</li><li>Maintaining professionalism and appropriate teacher-student relationships.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(55, 6, 'Kundalini Yoga Lifestyle: Yogic Lifestyle and Diet:', '<ul><li>Discussion of the Kundalini Yoga way of life, including diet, daily routines, and maintaining a yogic lifestyle.</li><li>How to integrate Kundalini Yoga principles into daily life.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(56, 6, 'Kundalini Yoga Lifestyle:  Hatha Yoga Asanas (Postures):', '<ul><li>In-depth study and practice of Hatha yoga asanas, including alignment, benefits, and variations.</li><li>Learning and practicing a wide range of yoga postures, including standing, seated, forward bends, backbends, inversions, and twists.</li><li>Emphasis on proper alignment, adjustments, and modifications to accommodate different body types and abilities.</li><li>Sequencing Hatha yoga classes for different levels.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(57, 6, 'Personal Growth and Self-Reflection: Self-Reflection and Personal Growth:', '<ul><li>Encouragement of self-inquiry, self-awareness, and personal growth throughout the training.</li><li>Developing a deeper understanding of one\'s own spiritual journey.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(58, 6, 'Practical Teaching Experience: Practice Teaching:', '<ul><li>Opportunities to lead Kundalini Yoga classes and receive feedback from instructors and peers.</li><li>Supervised teaching practice to refine teaching skills.</li></ul>', '2023-10-30 22:52:48', '2023-10-30 22:52:48'),
(59, 7, 'Kundalini Yoga Philosophy and History:', '<ul><li>In-depth study of Kundalini Yoga philosophy, including its origins and evolution.</li><li>Exploration of Kundalini energy, chakras, and their significance.</li><li>Understanding the teachings of Kundalini Yoga masters like Yogi Bhajan.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(60, 7, 'Advanced Kundalini Kriyas and Asanas:', '<ul><li>Practice and instruction in advanced Kundalini kriyas (sets of postures, breath, and sound) and asanas.</li><li>Focus on the correct alignment, sequencing, and modifications for advanced poses.</li><li>Incorporating the use of props and adjustments in Kundalini Yoga.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(61, 7, 'Advanced Hatha Yoga Practice', '<ul><li>In-depth exploration of Hatha yoga asanas (postures).</li><li>Advanced variations, modifications, and adjustments.</li><li>Refinement of alignment principles and sequencing.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(62, 7, 'Pranayama and Breathwork:', '<ul><li>Advanced pranayama techniques specific to Kundalini Yoga.</li><li>Breath control and manipulation for energy awakening and management.</li><li>Teaching pranayama to students safely and effectively.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(63, 7, 'Mantras, Mudras, and Meditation:', '<ul><li>Mastery of Kundalini mantras and their effects on consciousness.</li><li>Exploring advanced mudras (gestures) used in Kundalini practice.</li><li>In-depth meditation techniques and their applications in Kundalini Yoga.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(64, 7, 'Anatomy and Physiology:', '<ul><li>Advanced study of anatomy relevant to Kundalini Yoga practice.</li><li>Understanding the energetics of the body, including the subtle energy channels (nadis).</li><li>Anatomy of the nervous system and its relationship to Kundalini awakening.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(65, 7, 'Teaching Methodology:', '<ul><li>Advanced teaching techniques, including class sequencing and adapting classes for various levels.</li><li>Ethical considerations in teaching Kundalini Yoga.</li><li>Developing your unique teaching style and presence as a Kundalini Yoga teacher.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(66, 7, 'Kundalini Awakening and Chakra Work:', '<ul><li>Techniques for Kundalini energy awakening and balancing.</li><li>In-depth study of the chakra system and its role in Kundalini Yoga.</li><li>Guiding students through chakra-based practices and meditations.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(67, 7, 'Yoga Ethics and Lifestyle:', '<ul><li>Ethical considerations for Kundalini Yoga teachers.</li><li>Living a yogic lifestyle and maintaining personal integrity.</li><li>Supporting students in their Kundalini Yoga journey.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(68, 7, 'Practicum and Teaching Experience:', '<ul><li>Teaching practice sessions with peers and receiving feedback.</li><li>Assisting and observing other teachers.</li><li>Developing your teaching portfolio, including lesson plans and class sequences.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(69, 7, 'Business and Marketing', '<ul><li>Marketing yourself as a Kundalini Yoga teacher</li><li>Running a successful Kundalini Yoga business</li><li>Legal and ethical considerations for yoga professionals.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(70, 7, 'Final Assessment and Certification:', '<ul><li>Typically, a final examination and teaching practicum</li><li>Graduation and certification as a 300-Hour Kundalini Yoga Teacher.</li></ul>', '2023-10-30 23:06:52', '2023-10-30 23:06:52'),
(71, 8, 'Kundalini Yoga Philosophy and History:', '<ul><li>In-depth study of Kundalini Yoga philosophy, including its origins and evolution.</li><li>Exploration of Kundalini energy, chakras, and their significance.</li><li>Understanding the teachings of Kundalini Yoga masters like Yogi Bhajan.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(72, 8, 'Kundalini Kriyas and Asanas:', '<ul><li>Practice and instruction in advanced Kundalini kriyas (sets of postures, breath, and sound) and asanas.</li><li>Focus on the correct alignment, sequencing, and modifications for advanced poses.</li><li>Incorporating the use of props and adjustments in Kundalini Yoga.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(73, 8, 'Pranayama and Breathwork:', '<ul><li>Pranayama techniques specific to Kundalini Yoga.</li><li>Breath control and manipulation for energy awakening and management.</li><li>Teaching pranayama to students safely and effectively within the context of Kundalini Yoga.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(74, 8, 'Mantras, Mudras, and Meditation:', '<ul><li>Mastery of Kundalini mantras and their effects on consciousness.</li><li>Advanced mudras (gestures) used in Kundalini practice.</li><li>In-depth meditation techniques and their applications in Kundalini Yoga, including mantra meditation and various meditation styles.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(75, 8, 'Anatomy and Physiology:', '<ul><li>In-depth study of anatomy relevant to Kundalini Yoga practice.</li><li>Understanding the energetics of the body, including the subtle energy channels (nadis).</li><li>Anatomy of the nervous system and its relationship to Kundalini awakening.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(76, 8, 'Hatha yoga Practice:', '<ul><li>In-depth exploration of Hatha yoga asanas (postures).</li><li>Learning and practicing a wide range of yoga postures, including standing, seated, forward bends, backbends, inversions, and twists.</li><li>Emphasis on proper alignment, adjustments, and modifications to accommodate different body types and abilities.</li><li>Sequencing Hatha yoga classes for different levels.</li><li>Advanced variations, modifications, and adjustments.</li><li>Refinement of alignment principles and sequencing.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(77, 8, 'Teaching Methodology:', '<ul><li>Teaching techniques specific to Kundalini Yoga.</li><li>Designing and leading advanced Kundalini Yoga classes, including themed and specialized classes.</li><li>Working with diverse student populations and addressing individual needs within the Kundalini tradition.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(78, 8, 'Kundalini Awakening and Chakra Work:', '<ul><li>Techniques for Kundalini energy awakening and balancing.</li><li>In-depth study of the chakra system and its role in Kundalini Yoga.</li><li>Guiding students through advanced chakra-based practices and meditations.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(79, 8, 'Yoga Ethics and Lifestyle:', '<ul><li>Ethical considerations for Kundalini Yoga teachers.</li><li>Living a yogic lifestyle and maintaining personal integrity.</li><li>Supporting students in their Kundalini Yoga journey while adhering to Kundalini ethical principles.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(80, 8, 'Practicum and Teaching Experience', '<ul><li>Teaching practice sessions with peers and receiving feedback</li><li>Assisting and observing experienced Kundalini teachers.</li><li>Developing your unique teaching style while adhering to the traditional Kundalini method.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(81, 8, 'Final Assessment and Certification', '<ul><li>Typically, a final examination and teaching practicum.</li><li>Graduation and certification as a 500-Hour Kundalini Yoga Teacher.</li></ul>', '2023-10-30 23:19:21', '2023-10-30 23:19:21'),
(82, 9, 'Ayurveda Ayurveda', '<ul><li>Origins and historical development of Ayurveda.</li><li>Fundamental principles and philosophy of Ayurveda.</li><li>Understanding the Tridosha concept (Vata, Pitta, Kapha).</li></ul>', '2023-10-30 23:45:10', '2023-10-30 23:45:10'),
(83, 9, 'Module 2: Ayurvedic Anatomy and Physiology', '<ul><li>Exploration of Ayurvedic anatomy and physiology.</li><li>Study of the seven Dhatus (tissues) and the importance of proper digestion (Agni).</li><li>The concept of Malas (waste products) in Ayurveda.</li></ul>', '2023-10-30 23:45:11', '2023-10-30 23:45:11'),
(84, 9, 'Module 3: Prakriti and Vikriti', '<ul><li>Assessing individual constitution (Prakriti) and understanding its significance.</li><li>Identifying and addressing imbalances (Vikriti) in the body and mind.</li><li>Practical methods for conducting Prakriti and Vikriti assessments.</li></ul>', '2023-10-30 23:45:11', '2023-10-30 23:45:11'),
(85, 9, 'Module 4: Ayurvedic Diet and Nutrition', '<ul><li>Ayurvedic dietary principles and guidelines for different constitutions.</li><li>Ayurvedic cooking and meal planning.</li><li>Ayurvedic herbs and spices for health and healing.</li></ul>', '2023-10-30 23:45:11', '2023-10-30 23:45:11'),
(86, 9, 'Module 5: Ayurvedic Lifestyle and Daily Routines', '<ul><li>Ayurvedic daily routines (Dinacharya) for optimal health and balance.</li><li>Incorporating Ayurvedic rituals into daily life.</li><li>Ayurvedic practices for self-care and rejuvenation.</li></ul>', '2023-10-30 23:45:11', '2023-10-30 23:45:11'),
(87, 9, 'Module 6: Ayurvedic Therapies and Detoxification', '<ul><li>Overview of Ayurvedic therapies, including Panchakarma.</li><li>Practical application of Ayurvedic treatments for various health conditions.</li><li>Understanding the role of Ayurveda in detoxification and rejuvenation.</li></ul>', '2023-10-30 23:45:11', '2023-10-30 23:45:11'),
(88, 9, 'Module 7: Ayurveda and Yoga Integration', '<ul><li>The relationship between Ayurveda and yoga.</li><li>Incorporating Ayurvedic principles into yoga practice and teaching.</li><li>Designing yoga sequences that align with Ayurvedic principles.</li></ul>', '2023-10-30 23:45:11', '2023-10-30 23:45:11'),
(89, 9, 'Module 8: Ayurvedic Psychology and Mental Health', '<ul><li>Ayurvedic approach to mental health and emotional well-being.</li><li>Balancing the mind through Ayurveda and yoga.</li><li>Practical tools for managing stress and promoting mental clarity.</li></ul>', '2023-10-30 23:45:11', '2023-10-30 23:45:11'),
(90, 9, 'Module 9: Ayurvedic Consultation and Counseling', '<ul><li>Developing skills in Ayurvedic consultation and counseling.</li><li>Creating personalized wellness plans for clients.</li><li>Ethical considerations in Ayurvedic practice.</li></ul>', '2023-10-30 23:45:11', '2023-10-30 23:45:11'),
(91, 10, 'Introduction to Meditation', '<ul><li>History and philosophy of meditation.</li><li>Different meditation traditions and their origins.</li><li>The science of meditation and its benefits.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(92, 10, 'Meditation Techniques', '<ul><li>Instruction and practice of various meditation techniques.</li><li>Guided meditation practice</li><li>Understanding the purpose and applications of different practices.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(93, 10, 'Anatomy & Physiology in Meditation', '<ul><li>The physiological and psychological effects of meditation.</li><li>Understanding the mind-body connection.</li><li>How meditation impacts the nervous system and brain.</li><li>Anatomy relevant to meditation practice.</li><li>The physical and mental effects of meditation on the body.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(94, 10, 'Teaching Methodology', '<ul><li>Effective teaching techniques for meditation.</li><li>Creating a conducive environment for meditation.</li><li>Guiding group and individual meditation sessions.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(95, 10, 'Meditation and Philosophy', '<ul><li>The philosophical and spiritual aspects of meditation.</li><li>Integrating meditation into daily life and one\'s personal philosophy.</li><li>The role of ethics and mindfulness in meditation practice.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(96, 10, 'Hatha Yoga Asanas (Postures):', '<ul><li>In-depth study and practice of Hatha yoga asanas, including alignment, benefits, and variations.</li><li>Learning and practicing a wide range of yoga postures, including standing, seated, forward bends, backbends, inversions, and twists.</li><li>Emphasis on proper alignment, adjustments, and modifications to accommodate different body types and abilities.</li><li>Sequencing Hatha yoga classes for different levels.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(97, 10, 'Pranayama (Breath Control):', '<ul><li>Exploration of various pranayama techniques specific to Hatha yoga.</li><li>Integrating breath control into the practice and teaching.</li><li>Instruction in various pranayama techniques to improve breath awareness, control, and energy management.</li><li>How to incorporate pranayama into yoga classes for enhanced practice.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(98, 10, 'Yoga and Meditation Integration', '<ul><li>The connection between yoga and meditation.</li><li>Incorporating meditation into yoga practice.</li><li>Techniques for teaching meditation within a yoga class.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(99, 10, 'Ethics and Professionalism', '<ul><li>Ethical considerations for meditation teachers.</li><li>Establishing and maintaining professional boundaries.</li><li>Responsible teaching and practice in the field of meditation.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(100, 10, 'Practicum and Teaching Experience', '<ul><li>Leading meditation sessions and receiving feedback.</li><li>Assisting and observing experienced meditation teachers.</li><li>Developing your unique teaching style while adhering to best practices.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47'),
(101, 10, 'Final Assessments and Certification', '<ul><li>Written and practical examinations to assess knowledge and teaching skills.</li><li>Graduation and certification as a 200-Hour Meditation Teacher.</li></ul>', '2023-10-30 23:59:47', '2023-10-30 23:59:47');

-- --------------------------------------------------------

--
-- Table structure for table `coursedates`
--

CREATE TABLE `coursedates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursedates`
--

INSERT INTO `coursedates` (`id`, `course_id`, `date`, `seats`, `created_at`, `updated_at`) VALUES
(4, 1, '4th Jan - 28th Jan 2024', '3 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(5, 1, '1st Feb - 25th Feb 2024', '4 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(6, 1, '1st Mar - 25th Mar 2024', '4 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(7, 1, '1st Apr - 25th Apr 2024', '5 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(8, 1, '1st May - 25th May 2024', '5 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(9, 1, '1st Jun - 25th Jun 2024', '7 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(10, 1, '1st Jul - 25th Jul 2024', '8 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(11, 1, '1st Aug - 25th Aug 2024', '7 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(12, 1, '1st Sep - 25th Sep 2024', '9 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(13, 1, '1st Oct - 25th Oct 2024', '7 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(14, 1, '1st Nov - 25th Nov 2024', '7 seats left', '2023-10-28 06:59:51', '2023-10-28 06:59:51'),
(15, 4, '1 Feb - 25 Feb 2023', '3 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(16, 4, '1 Mar - 25 Mar 2023', '4 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(17, 4, '1 Apr - 25 Apr 2023', '3 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(18, 4, '1 May - 25 May 2023', '5 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(19, 4, '1 June - 25 June 2023', '5 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(20, 4, '1 July- 25 July 2023', '5 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(21, 4, '1 August - 25 August 2023', '5 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(22, 4, '1 September - 25 September', '5 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(23, 4, '1 October - 25 October', '5 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(24, 4, '1 November - 25 November', '5 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(25, 4, '1 December - 25 December', '5 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(26, 4, '1 January - 25 January', '5 seats left', '2023-10-28 07:13:33', '2023-10-28 07:13:33'),
(27, 6, '1 Feb - 25 Feb 2024', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(28, 6, '1 Mar - 25 Mar 2023', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(29, 6, '1 Apr - 25 Apr 2023', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(30, 6, '1 May - 25 May 2023', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(31, 6, '1 June - 25 June 2023', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(32, 6, '1 July - 25 July 2023', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(33, 6, '1 August - 25 August 2023', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(34, 6, '1 September - 25 September', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(35, 6, '1 October - 25 October', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(36, 6, '1 November- 25 November', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(37, 6, '1 December - 25 December', '3 Seats Left', '2023-10-30 22:55:07', '2023-10-30 22:55:07'),
(38, 7, '1 Feb - 25 Feb 2023', '3 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(39, 7, '1 Mar - 25 Mar 2023', '4 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(40, 7, '1 Apr - 25 Apr 2023', '3 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(41, 7, '1 May - 25 May 2023', '5 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(42, 7, '1 June - 25 June 2023', '5 seats  left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(43, 7, '1 July - 25 July 2023', '5 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(44, 7, '1 August - 25 August 2023', '5 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(45, 7, '1 September - 25 September', '5 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(46, 7, '1 October - 25 October', '5 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(47, 7, '1 November - 25 November', '5 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(48, 7, '1 December - 25 December', '5 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(49, 7, '1 January - 25 January', '5 seats left', '2023-10-30 23:11:38', '2023-10-30 23:11:38'),
(50, 8, '1 Feb - 25 Feb 2023', '3 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(51, 8, '1 Mar - 25 Mar 2023', '4 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(52, 8, '1 Apr - 25 Apr 2023', '3 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(53, 8, '1 May - 25 May 2023', '5 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(54, 8, '1 June - 25 June 2023', '5 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(55, 8, '1 July - 25 July 2023', '5 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(56, 8, '1 August - 25 August 2023', '5 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(57, 8, '1 September - 25 September', '5 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(58, 8, '1 October - 25 October', '5 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(59, 8, '1 November - 25 November', '5 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(60, 8, '1 December - 25 December', '5 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(61, 8, '1 January - 25 January', '5 seats left', '2023-10-30 23:25:59', '2023-10-30 23:25:59'),
(62, 9, '1 Feb - 25 Feb 2023', '3 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(63, 9, '1 Mar - 25 Mar 2023', '4 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(64, 9, '1 Apr - 25 Apr 2023', '3 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(65, 9, '1 May - 25 May 2023', '5 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(66, 9, '1 June - 25 June 2023', '5 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(67, 9, '1 August - 25 August 2023', '5 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(68, 9, '1 September - 25 September', '5 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(69, 9, '1 October - 25 October', '5 seats leftv', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(70, 9, '1 November - 25 November', '5 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(71, 9, '1 December - 25 December', '5 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(72, 9, '1 January - 25 January', '5 seats left', '2023-10-30 23:49:28', '2023-10-30 23:49:28'),
(73, 10, '1st Oct - 25th Oct 2023', '4 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(74, 10, '1st Nov - 25th Nov 2023', '5 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(75, 10, '1st Dec - 25th Dec 2023', '5 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(76, 10, '5th Jan - 29th Jan 2024', '7 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(77, 10, '1st Feb - 25th Feb 2024', '6 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(78, 10, '1st Mar - 25th Mar 2024', '9 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(79, 10, '1st Apr - 25th Apr 2024', '7 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(80, 10, '1st May - 25th May 2024', '8 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(81, 10, '1st Jun - 25th Jun 2024', '11 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(82, 10, '1st Jul - 25th Jul 2024', '11 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(83, 10, '1st Aug - 25th Aug 2024', '14 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53'),
(84, 10, '1st Sep - 25th Sep 2024', '14 seats left', '2023-10-31 00:04:53', '2023-10-31 00:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `coursefaqs`
--

CREATE TABLE `coursefaqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursefaqs`
--

INSERT INTO `coursefaqs` (`id`, `course_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(5, 1, 'Can I do this course if I am not flexible?', 'Yes, anyone can join this yoga course to enhance their yoga knowledge and flexibility. We do not expect the students to have good flexibility before joining the course as it will get better in the process. This course is suitable for everyone willing to join yoga as a career.', '2023-10-11 02:22:38', '2023-10-11 02:22:38'),
(6, 1, 'How many students do you enroll in this course?', 'For this course, we enroll 15-20 students per batch.', '2023-10-11 02:22:38', '2023-10-11 02:22:38'),
(7, 1, 'What is the average age group of yoga students?', 'Most students are between 25 to 40. The rest are between 40 to 55', '2023-10-11 02:22:38', '2023-10-11 02:22:38'),
(8, 1, 'Do you have certified teachers for this yoga teacher training?', 'Yes, we have a group of highly skilled and certified yoga teachers. All teachers have a Ph.D. or Masters in Yoga. Visit our teachers page to know more about our teaching team.', '2023-10-11 02:22:38', '2023-10-11 02:22:38'),
(9, 1, 'Do you offer study materials for a 200 hour yoga teacher training course?', 'Yes, you will get a comprehensive yoga training manual and books for this course.', '2023-10-11 02:22:38', '2023-10-11 02:22:38'),
(10, 1, 'What does 200 hours of yoga mean?', '200 hours of yoga refers to the number of hours required to complete the yoga teacher training course. This is the minimum no. of hours set by the Yoga Alliance.', '2023-10-11 02:22:38', '2023-10-11 02:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `courseinclusions`
--

CREATE TABLE `courseinclusions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `inclusion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseinclusions`
--

INSERT INTO `courseinclusions` (`id`, `course_id`, `inclusion`, `created_at`, `updated_at`) VALUES
(21, 1, 'Pickup From Dehradun Airport  (DED)', '2023-10-28 06:53:58', '2023-10-28 06:53:58'),
(22, 1, 'Course Manuals', '2023-10-28 06:53:58', '2023-10-28 06:53:58'),
(23, 1, '24 Days Accommaodation', '2023-10-28 06:53:58', '2023-10-28 06:53:58'),
(24, 1, 'Shatkarma kit', '2023-10-28 06:53:58', '2023-10-28 06:53:58'),
(25, 1, 'Vegetarian Meals', '2023-10-28 06:53:58', '2023-10-28 06:53:58'),
(26, 1, '2 Sunday Excursions', '2023-10-28 06:53:58', '2023-10-28 06:53:58'),
(27, 4, 'Pickup From Dehradun Airport (DED)', '2023-10-28 07:06:01', '2023-10-28 07:06:01'),
(28, 4, 'Course Manuals', '2023-10-28 07:06:01', '2023-10-28 07:06:01'),
(29, 4, '24 Days Accommaodation', '2023-10-28 07:06:01', '2023-10-28 07:06:01'),
(30, 4, 'Shatkarma kit', '2023-10-28 07:06:01', '2023-10-28 07:06:01'),
(31, 4, 'Vegetarian Meals', '2023-10-28 07:06:01', '2023-10-28 07:06:01'),
(32, 4, '2 Sunday Excursions', '2023-10-28 07:06:01', '2023-10-28 07:06:01'),
(33, 5, 'Pickup From Dehradun Airport (DED)', '2023-10-28 07:17:24', '2023-10-28 07:17:24'),
(34, 5, 'Course Manuals', '2023-10-28 07:17:24', '2023-10-28 07:17:24'),
(35, 5, '24 Days Accommaodation', '2023-10-28 07:17:24', '2023-10-28 07:17:24'),
(36, 5, 'Shatkarma kit', '2023-10-28 07:17:24', '2023-10-28 07:17:24'),
(37, 5, 'Vegetarian Meals', '2023-10-28 07:17:24', '2023-10-28 07:17:24'),
(38, 5, '2 Sunday Excursions', '2023-10-28 07:17:24', '2023-10-28 07:17:24'),
(39, 6, 'Pickup From Dehradun Airport (DED)', '2023-10-30 22:48:29', '2023-10-30 22:48:29'),
(40, 6, 'Course Manuals', '2023-10-30 22:48:29', '2023-10-30 22:48:29'),
(41, 6, '24 Days Accommaodation', '2023-10-30 22:48:29', '2023-10-30 22:48:29'),
(42, 6, 'Shatkarma kit', '2023-10-30 22:48:29', '2023-10-30 22:48:29'),
(43, 6, 'Vegetarian Meals', '2023-10-30 22:48:29', '2023-10-30 22:48:29'),
(44, 6, '2 Sunday Excursions', '2023-10-30 22:48:29', '2023-10-30 22:48:29'),
(45, 7, 'Pickup From Dehradun Airport (DED)', '2023-10-30 23:03:46', '2023-10-30 23:03:46'),
(46, 7, 'Course Manuals', '2023-10-30 23:03:46', '2023-10-30 23:03:46'),
(47, 7, '24 Days Accommaodation', '2023-10-30 23:03:46', '2023-10-30 23:03:46'),
(48, 7, 'Shatkarma kit', '2023-10-30 23:03:46', '2023-10-30 23:03:46'),
(49, 7, 'Vegetarian Meals', '2023-10-30 23:03:46', '2023-10-30 23:03:46'),
(50, 7, '2 Sunday Excursions', '2023-10-30 23:03:46', '2023-10-30 23:03:46'),
(51, 8, 'Pickup From Dehradun Airport (DED)', '2023-10-30 23:16:49', '2023-10-30 23:16:49'),
(52, 8, 'Course Manuals', '2023-10-30 23:16:49', '2023-10-30 23:16:49'),
(53, 8, '24 Days Accommaodation', '2023-10-30 23:16:49', '2023-10-30 23:16:49'),
(54, 8, 'Shatkarma kit', '2023-10-30 23:16:49', '2023-10-30 23:16:49'),
(55, 8, 'Vegetarian Meals', '2023-10-30 23:16:49', '2023-10-30 23:16:49'),
(56, 8, '2 Sunday Excursions', '2023-10-30 23:16:49', '2023-10-30 23:16:49'),
(57, 9, 'Pickup From Dehradun Airport (DED)', '2023-10-30 23:42:40', '2023-10-30 23:42:40'),
(58, 9, 'Course Manuals', '2023-10-30 23:42:40', '2023-10-30 23:42:40'),
(59, 9, '24 Days Accommaodation', '2023-10-30 23:42:40', '2023-10-30 23:42:40'),
(60, 9, 'Shatkarma kit', '2023-10-30 23:42:40', '2023-10-30 23:42:40'),
(61, 9, 'Vegetarian Meals', '2023-10-30 23:42:40', '2023-10-30 23:42:40'),
(62, 9, '2 Sunday Excursions', '2023-10-30 23:42:40', '2023-10-30 23:42:40'),
(63, 10, 'Pickup From Dehradun Airport (DED)', '2023-10-30 23:56:56', '2023-10-30 23:56:56'),
(64, 10, 'Course Manuals', '2023-10-30 23:56:56', '2023-10-30 23:56:56'),
(65, 10, '24 Days Accommaodation', '2023-10-30 23:56:56', '2023-10-30 23:56:56'),
(66, 10, 'Shatkarma kit', '2023-10-30 23:56:56', '2023-10-30 23:56:56'),
(67, 10, 'Vegetarian Meals', '2023-10-30 23:56:56', '2023-10-30 23:56:56'),
(68, 10, '2 Sunday Excursions', '2023-10-30 23:56:56', '2023-10-30 23:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `coursemedia`
--

CREATE TABLE `coursemedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certification` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privateroom` int(11) DEFAULT NULL,
  `shared2room` int(11) DEFAULT NULL,
  `shared3room` int(11) DEFAULT NULL,
  `shared6room` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakeywords` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(1200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `type` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0->yoga teacher, 1->knudlini yoga teacher\r\n',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hour` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `slug`, `duration`, `certification`, `privateroom`, `shared2room`, `shared3room`, `shared6room`, `description`, `image`, `metatitle`, `metakeywords`, `metadescription`, `alt`, `status`, `type`, `created_at`, `updated_at`, `hour`) VALUES
(1, '200 Hour Yoga Teacher Training in Rishikesh, India', '200-hour-yoga-teacher-training-in-rishikesh-india', '15 Days', 'RYT-200, Yoga Alliance USA', 1499, 1199, 999, 799, '<p>If you are looking to deepen your yoga practice and take the first step towards becoming a certified yoga teacher, then our 200 hour yoga teacher training in Rishikesh is the perfect choice for you. This course is designed to provide individuals with a solid foundation in the principles and practices of yoga. The program typically covers topics such as asanas (yoga postures), pranayama (breathing techniques), meditation, anatomy, philosophy, and teaching methodology. Students not only gain a deep understanding of these aspects of yoga but also have the opportunity to develop their own personal practice.</p>\r\n\r\n<p>One of the key advantages of undertaking a 200 hour yoga teacher training in India is the immersive and transformative experience it offers. Being in the birthplace of yoga itself, surrounded by the natural beauty of the Himalayas, creates an ideal environment for self-reflection and self-discovery. Our rigorous schedule and disciplined lifestyle during the training help students develop focus, discipline, and resilience.</p>\r\n\r\n<p>Upon successful completion of a 200 hour yoga teacher training in Rishikesh, students are awarded a certification that allows them to register with Yoga Alliance as a registered yoga teacher (RYT). This certification opens up numerous opportunities for graduates to teach yoga professionally, whether it be at studios, retreat centers, or gyms. Additionally, the training equips individuals with the knowledge and skills to guide others on their own yogic journey and make a positive impact on their lives</p>', '/upload/course/651fdd127b216dsc00857-1.webp', '200 Hour Yoga Teacher Training in Rishikesh, India', '200 Hour Yoga Teacher Training in Rishikesh, India', 'If you are looking to deepen your yoga practice and take the first step towards becoming a certified yoga teacher, then our 200 hour yoga teacher training in Rishikesh is the perfect choice for you.', '200 Hour Ayurveda Yoga Teacher Training in Rishikesh', 1, 0, '2023-10-06 03:36:02', '2023-10-30 22:40:29', '200 Hr'),
(4, '300 Hour Yoga Teacher Training in Rishikesh, India', '300-hour-yoga-teacher-training-in-rishikesh-india', '30 Days', 'RYT-200, Yoga Alliance USA', 1499, 1199, 999, 799, '<p dir=\"ltr\">Our 300 Hour Yoga Teacher Training in Rishikesh, India is a comprehensive program designed to deepen your understanding and practice of yoga. This is an advanced course designed for those individuals who have already completed their 200 hour YTTC in any style of yoga. With a focus on advanced asanas, pranayama techniques, meditation, and teaching methodology, this training will equip you with the skills and knowledge needed to become a confident and effective yoga teacher. Our experienced and highly trained faculty will guide you through the training, providing personalized attention and support.&nbsp;</p>\r\n\r\n<p>Upon completion of our 300 hour yoga teacher training in India, you will be equipped with the knowledge and skills to confidently lead your own yoga classes. You will receive a certification recognized by Yoga Alliance, the leading international organization for yoga teachers. Located in the spiritual heart of India, Rishikesh offers the perfect environment for immersing yourself in the study and practice of yoga. Join us for our 300 hour yoga teacher training in Rishikesh and take your yoga journey to the next level.</p>\r\n\r\n<div>&nbsp;</div>', '/upload/course/653d000eb32c7img-5245-1.webp', '300 Hour Yoga Teacher Training in Rishikesh, India', '300 Hour Yoga Teacher Training in Rishikesh', 'Our 300 Hour Yoga Teacher Training in Rishikesh, India is a comprehensive program designed to deepen your understanding and practice of yoga.', '300 Hour Yoga Teacher Training in Rishikesh', 1, 0, '2023-10-28 07:05:26', '2023-10-28 07:05:26', '300 Hr'),
(5, '500 Hour Yoga Teacher Training in Rishikesh, India', '500-hour-yoga-teacher-training-in-rishikesh-india', '60 Days', 'RYT-200, Yoga Alliance USA', 1499, 1199, 999, 799, '<p>Welcome to our 500 Hour Yoga Teacher Training in Rishikesh, India! This 2-months long program is designed for those who are serious about deepening their knowledge and practice of yoga. With a focus on both theory and practical training, our program will equip you with the skills and confidence to become a certified yoga teacher. During the course, you will have the opportunity to study under experienced and highly skilled yoga instructors who are dedicated to helping you reach your full potential as a teacher.&nbsp;</p>\r\n\r\n<p>The course is accredited by the Yoga Alliance, USA. You will deepen your personal practice through daily asana, pranayama, and meditation sessions, while also learning how to effectively teach these practices to others. In addition to the intensive study of yoga theory and practice, our program includes classes on sequencing, alignment, adjustments, and teaching methodology. Join us on our 500 hour Yoga Teacher Training in India and embark on a transformative journey of self-discovery and growth.</p>', '/upload/course/653d02b76dcf9pexels-gokul-gurang-15980663-1.webp', '500 Hour Yoga Teacher Training in Rishikesh, India', '500 Hour Yoga Teacher Training in Rishikesh, India', 'Welcome to our 500 Hour Yoga Teacher Training in Rishikesh, India! This 2-months long program is designed for those who are serious about deepening their knowledge and practice of yoga.', '500 Hour Yoga Teacher Training in Rishikesh', 1, 0, '2023-10-28 07:16:47', '2023-10-28 07:16:47', '500 Hr'),
(6, '200 hour Kundalini Yoga Teacher Training in Rishikesh, India', '200-hour-kundalini-yoga-teacher-training-in-rishikesh-india', '25 Days', 'RYT-200, Yoga Alliance USA', 1499, 1199, 999, 799, '<p>&nbsp;If you are looking to deepen your yoga practice and become a certified instructor, the 200-hour Kundalini Yoga Teacher Training in Rishikesh, India is an excellent choice.The program consists of a combination of theoretical and practical classes, covering topics such as kundalini asanas, Kundalini yoga philosophy, anatomy and physiology, teaching methodology, meditation techniques, mantra chanting, and much more. Studnets will also have the opportunity to learn about the chakra system and how it relates to Kundalini energy.</p>\r\n\r\n<p>The training is led by experienced and certified Kundalini yoga teachers who are passionate about sharing their knowledge and helping individuals develop their teaching skills.&nbsp;<br />\r\nAt the end of the 200 hour Kundalini Yoga Teacher Training in India, participants will receive a certification that enables them to teach Kundalini yoga classes. This certification is recognized internationally and provides graduates with the necessary credentials to start teach at established yoga centers</p>', '/upload/course/65407fd538be2dsc07893.webp', '200 hour Kundalini Yoga Teacher Training in Rishikesh, India', '200 hour Kundalini Yoga Teacher Training', 'If you are looking to deepen your yoga practice and become a certified instructor, the 200-hour Kundalini Yoga Teacher Training in Rishikesh, India is an excellent choice.', '200 hour Kundalini Yoga Teacher Training', 1, 1, '2023-10-30 22:47:25', '2023-10-30 22:47:25', '200 Hr'),
(7, '300 Hour Kundalini Yoga Teacher Training in Rishikesh, India', '300-hour-kundalini-yoga-teacher-training-in-rishikesh-india', '30 days', 'RYT-200, Yoga Alliance USA', 1499, 1199, 999, 799, '<p>Our 300 hour Kundalini Yoga Teacher Training in Rishikesh, India is an intensive program designed to deepen your understanding and practice of Kundalini Yoga. This training is suitable for experienced yoga teachers looking to expand their knowledge and sharing the transformative power of Kundalini Yoga. The trainee should have completed 200 hour Kundalini course in order to be eligible for this course.</p>\r\n\r\n<p>Located in the spiritual heartland of Rishikesh, Nirvana Yoga School&nbsp; provides the perfect environment for deepening your practice and immersing yourself in the teachings of Kundalini Yoga. During this 300 hour kundalini yoga teacher training in India, you will further delve into the philosophy, theory, and practical aspects of Kundalini Yoga. Upon completion of this training, you will receive a 300 hour Kundalini YTT certification, allowing you to confidently teach Kundalini Yoga to students around the world. This certification is recognized by Yoga Alliance, ensuring that you meet the highest standards of teaching and professionalism</p>', '/upload/course/6540838486b38img-5245-1-1.webp', '300 Hour Kundalini Yoga Teacher Training in Rishikesh, India', '300 Hour Kundalini Yoga Teacher Training in Rishikesh, India', 'Our 300 hour Kundalini Yoga Teacher Training in Rishikesh, India is an intensive program designed to deepen your understanding and practice of Kundalini Yoga.', '300 Hour Kundalini Yoga Teacher Training in Rishikesh, India', 1, 1, '2023-10-30 23:03:08', '2023-10-30 23:03:08', '300 Hour'),
(8, '500 Hour Kundalini Yoga Teacher Training in Rishikesh, India', '500-hour-kundalini-yoga-teacher-training-in-rishikesh-india', '30 Days', 'RYT-200, Yoga Alliance USA', 1499, 1199, 999, 799, '<p>During the 500 Hour Kundalini Yoga Teacher Training in Rishikesh, students will delve into the theory and philosophy of Kundalini Yoga, as well as its practical application in daily life. They will learn various kriyas (yogic exercises), pranayama (breathing techniques), meditation practices, and mantra chanting, all aimed at awakening the dormant energy within and achieving a state of higher consciousness. In addition to the traditional aspects of Kundalini Yoga, our training also includes modules on anatomy and physiology, teaching methodology, and yogic lifestyle. These modules are designed to equip students with the necessary tools and skills to become confident and competent yoga teachers.</p>\r\n\r\n<p>Our experienced and knowledgeable teachers will guide students through these practices, ensuring a safe and transformative learning experience. Students will have ample opportunities to practice teaching under the guidance of our experienced faculty, allowing them to refine their teaching style and gain valuable feedback. At the end of this 500 Hour Kundalini Yoga Teacher Training in India, students will receive a globally recognized certification, enabling them to teach Kundalini Yoga anywhere in the world. Our program is registered with Yoga Alliance, ensuring that our curriculum meets their stringent standards. Graduates will not only have a deep understanding of Kundalini Yoga but also the ability to share this ancient wisdom with others.</p>', '/upload/course/65408660ddd7bdsc07893-1.webp', '500 Hour Kundalini Yoga Teacher Training in Rishikesh, India', '500 Hour Kundalini Yoga Teacher Training in Rishikesh, India', 'During the 500 Hour Kundalini Yoga Teacher Training in Rishikesh, students will delve into the theory and philosophy of Kundalini Yoga, as well as its practical application in daily life.', '500 Hour Kundalini Yoga Teacher Training in Rishikesh, India', 1, 1, '2023-10-30 23:15:20', '2023-10-30 23:15:20', '500 Hr'),
(9, '200 Hour Ayurveda Yoga Teacher Training in Rishikesh, India', '200-hour-ayurveda-yoga-teacher-training-in-rishikesh-india', '20 Days', 'RYT-200, Yoga Alliance USA', 1499, 1199, 999, 799, '<p>Our 200 hour Ayurveda Yoga Teacher Training in Rishikesh is a comprehensive program designed to provide aspiring yoga teachers with a deep understanding of the ancient practice of Ayurveda and its integration with yoga. This training program is specifically designed to provide a solid foundation in Ayurveda and its principles, as well as a thorough understanding of yoga philosophy, anatomy, and teaching methodology. In addition to the theoretical and practical aspects of Ayurveda and yoga, this training also includes daily meditation and pranayama (breathing) practices.</p>\r\n\r\n<p>The 200-hour curriculum covers a wide range of topics, including Ayurvedic lifestyle practices, Ayurvedic diet and nutrition, Ayurvedic massage and bodywork techniques, and Ayurvedic herbs and remedies. Participants will also learn how to incorporate Ayurveda into their yoga teaching, allowing them to offer a holistic approach to their students.</p>\r\n\r\n<p>Our team of experienced and knowledgeable teachers will guide participants through this transformative journey, providing hands-on training and personalized support.Upon completion of the 200-hour Ayurveda Yoga Teacher Training, participants will receive a certification that is recognized by Yoga Alliance. If you are passionate about Ayurveda, yoga, and teaching, our 200-hour Ayurveda Yoga Teacher Training in India is the perfect opportunity for you to deepen your practice and gain the skills and knowledge needed to become a confident and competent yoga teacher.&nbsp;</p>', '/upload/course/65408c952f150ayurveda-massage-alternative-healing-therapy-beaut-2022-05-31-18-27-02-utc.webp', '200 Hour Ayurveda Yoga Teacher Training in Rishikesh, India', '200 Hour Ayurveda Yoga Teacher Training in Rishikesh, India', 'Our 200 hour Ayurveda Yoga Teacher Training in Rishikesh is a comprehensive program designed to provide aspiring yoga teachers with a deep understanding of the ancient practice of Ayurveda and its integration with yoga', '200 Hour Ayurveda Yoga Teacher Training in Rishikesh, India', 1, 0, '2023-10-30 23:41:49', '2023-10-30 23:41:49', '200 Hr'),
(10, '200 Hour Meditation Yoga Teacher Training in Rishikesh, India', '200-hour-meditation-yoga-teacher-training-in-rishikesh-india', '15 days', 'RYT-200, Yoga Alliance USA', 1499, 1199, 999, 799, '<p>Our 200 Hour Meditation Teacher Training in Rishikesh is a comprehensive program designed to provide aspiring meditation teachers with the necessary skills and knowledge to guide others in their meditation practice. This training is ideal for individuals who have a passion for meditation and want to deepen their own practice, as well as those who wish to share the benefits of meditation with others.&nbsp;</p>\r\n\r\n<p>The training curriculum covers a wide range of topics including the theory and philosophy of meditation, different meditation techniques, anatomy and physiology, teaching methodology, and the business of being a meditation teacher. Participants will have the opportunity to learn from experienced meditation teachers who have a deep understanding of the subject matter and are dedicated to helping others on their meditation journey.</p>\r\n\r\n<p>Throughout the 200 Hour Meditation Teacher Training in India, participants will have the opportunity to practice and refine their own meditation techniques, as well as learn how to effectively guide others in their practice. They will also learn how to create a safe and supportive environment for their students, as well as develop their own teaching style. By the end of the training, participants will have the knowledge and confidence to lead group meditation sessions and one-on-one meditation sessions.</p>', '/upload/course/65408ff3bd83dpresent-moment-mindful-meditation-2022-02-02-05-05-52-utc.webp', '200 Hour Meditation Yoga Teacher Training in Rishikesh, India', '200 Hour Meditation Yoga Teacher Training in Rishikesh, India', 'Our 200 Hour Meditation Teacher Training in Rishikesh is a comprehensive program designed to provide aspiring meditation teachers with the necessary skills and knowledge to guide others in their meditation practice.', '200 Hour Meditation Yoga Teacher Training in Rishikesh, India', 1, 0, '2023-10-30 23:56:11', '2023-10-30 23:56:11', '200 Hr');

-- --------------------------------------------------------

--
-- Table structure for table `courseschdules`
--

CREATE TABLE `courseschdules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseschdules`
--

INSERT INTO `courseschdules` (`id`, `course_id`, `time`, `task`, `created_at`, `updated_at`) VALUES
(12, 1, '05:00', 'Wake up', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(13, 1, '06:00 - 07:30', 'Traditional Hatha Yoga', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(14, 1, '07:45 - 08:45', 'Pranayama Mudras & Bandhas', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(15, 1, '09:00 - 09:30', 'Breakfast', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(16, 1, '10:45 - 11:45', 'Yoga Philosophy & Ethics', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(17, 1, '11:50 - 12:50', 'Teaching Methodology & Alignment-Adjustment', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(18, 1, '13:00 - 13:30', 'Lunch', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(19, 1, '14:30 - 15:30', 'Yoga Anatomy Physiology & Biomechanics', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(20, 1, '15:40 - 16:20', 'Ayurveda / Mantra Chanting', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(21, 1, '16:30 - 18:00', 'Ashtanga Vinyasa Yoga', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(22, 1, '18:00 - 19:00', 'Meditation / Yoga Nidra', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(23, 1, '19:15 - 20:00', 'Dinner...', '2023-10-28 06:57:35', '2023-10-28 06:57:35'),
(24, 4, '05:00', 'Wake up', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(25, 4, '06:00 - 07:30', 'Advanced Hatha Yoga', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(26, 4, '07:45 - 08:45', 'Pranayama Mudras & Bandhas', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(27, 4, '09:00 - 09:30', 'Breakfast', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(28, 4, '10:45 - 11:45', 'Yoga Philosophy & Ethics', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(29, 4, '11:50 - 12:50', 'Teaching Methodology & Alignment Adjustment', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(30, 4, '13:00 - 13:30', 'Lunch', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(31, 4, '14:30 - 15:30', 'Yoga Anatomy Physiology & Biomechanics', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(32, 4, '15:40 - 16:20', 'Ayurveda / Mantra Chanting', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(33, 4, '16:30 - 18:00', 'Advanced Ashtanga Vinyasa Yoga', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(34, 4, '18:00 - 19:00', 'Meditation / Yoga Nidra', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(35, 4, '19:15 - 20:00', 'Dinner...', '2023-10-28 07:11:18', '2023-10-28 07:11:18'),
(36, 5, '05:00', 'Wake up', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(37, 5, '06:00 - 07:00', 'Advanced Hatha Yoga', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(38, 5, '07:45 - 08:45', 'Pranayama Mudras & Bandhas', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(39, 5, '09:00 - 09:30', 'Breakfast', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(40, 5, '10:45 - 11:45', 'Yoga Philosophy & Ethics', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(41, 5, '11:50 - 12:50', 'Teaching Methodology & Alignment Adjustment', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(42, 5, '13:00 - 13:30', 'Lunch', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(43, 5, '14:30 - 15:30', 'Yoga Anatomy Physiology & Biomechanics', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(44, 5, '15:40 - 16:20', 'Ayurveda / Mantra Chanting', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(45, 5, '16:30 - 18:00', 'Advanced Ashtanga Vinyasa Yoga', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(46, 5, '18:00 - 19:00', 'Meditation / Yoga Nidra', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(47, 5, '19:15 - 20:00', 'Dinner...', '2023-10-28 07:22:43', '2023-10-28 07:22:43'),
(48, 6, '05:00', 'Wake up', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(49, 6, '06:00 - 07:30', 'Advanced Hatha Yoga', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(50, 6, '07:45 - 08:45', 'Pranayama Mudras & Bandhas', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(51, 6, '09:00 - 09:30', 'Breakfast  Yoga Philosophy & Ethics', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(52, 6, '10:45 - 11:45', 'Teaching Methodology & Alignment Adjustment', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(53, 6, '11:50 - 12:50', 'Lunch', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(54, 6, '13:00 - 13:30', 'Yoga Anatomy Physiology & Biomechanics', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(55, 6, '14:30 - 15:30', 'Ayurveda / Mantra Chanting', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(56, 6, '15:40 - 16:20', 'Advanced Ashtanga', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(57, 6, '16:30 - 18:00', 'Vinyasa Yoga', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(58, 6, '18:00 - 19:00', 'Meditation / Yoga Nidra', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(59, 6, '19:15 - 20:00', 'Dinner...', '2023-10-30 22:58:08', '2023-10-30 22:58:08'),
(60, 7, '05:00', 'Wake up', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(61, 7, '06:00 - 07:30', 'Advanced Hatha Yoga', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(62, 7, '07:45 - 08:45', 'Pranayama Mudras & Bandhas', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(63, 7, '09:00 - 09:30', 'Breakfast Yoga Philosophy & Ethics', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(64, 7, '10:45 - 11:45', 'Teaching Methodology & Alignment Adjustment', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(65, 7, '11:50 - 12:50', 'Lunch', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(66, 7, '13:00 - 13:30', 'Yoga Anatomy Physiology & Biomechanics', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(67, 7, '14:30 - 15:30', 'Ayurveda / Mantra Chanting', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(68, 7, '15:40 - 16:20', 'Advanced Ashtanga', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(69, 7, '16:30 - 18:00', 'Vinyasa Yoga', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(70, 7, '18:00 - 19:00', 'Meditation / Yoga Nidra', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(71, 7, '19:15 - 20:00', 'Dinner...', '2023-10-30 23:08:53', '2023-10-30 23:08:53'),
(72, 8, '05:00', 'Wake up', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(73, 8, '06:00 - 07:30', 'Advanced Hatha Yoga', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(74, 8, '07:45 - 08:45', 'Pranayama Mudras & Bandhas', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(75, 8, '09:00 - 09:30', 'Breakfast Yoga Philosophy & Ethics', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(76, 8, '10:45 - 11:45', 'Teaching Methodology & Alignment Adjustment', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(77, 8, '11:50 - 12:50', 'Lunch', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(78, 8, '13:00 - 13:30', 'Yoga Anatomy Physiology & Biomechanics', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(79, 8, '14:30 - 15:30', 'Ayurveda / Mantra Chanting', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(80, 8, '15:40 - 16:20', 'Advanced Ashtanga', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(81, 8, '16:30 - 18:00', 'Vinyasa Yoga', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(82, 8, '18:00 - 19:00', 'Meditation / Yoga Nidra', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(83, 8, '19:15 - 20:00', 'Dinner...', '2023-10-30 23:21:33', '2023-10-30 23:21:33'),
(84, 9, '05:00', 'Wake up', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(85, 9, '06:00 - 07:30', 'Advanced Hatha Yoga', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(86, 9, '07:45 - 08:45', 'Pranayama Mudras & Bandhas', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(87, 9, '09:00 - 09:30', 'Breakfast Yoga Philosophy & Ethics', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(88, 9, '10:45 - 11:45', 'Teaching Methodology & Alignment Adjustment', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(89, 9, '11:50 - 12:50', 'Lunch', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(90, 9, '13:00 - 13:30', 'Yoga Anatomy Physiology & Biomechanics', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(91, 9, '14:30 - 15:30', 'Ayurveda / Mantra Chanting', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(92, 9, '15:40 - 16:20', 'Advanced Ashtanga', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(93, 9, '16:30 - 18:00', 'Vinyasa Yoga', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(94, 9, '18:00 - 19:00', 'Meditation / Yoga Nidra', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(95, 9, '19:15 - 20:00 Dinner...', 'Dinner...', '2023-10-30 23:47:31', '2023-10-30 23:47:31'),
(96, 10, '05:00', 'Wake up', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(97, 10, '06:00 - 07:30', 'Advanced Hatha Yoga', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(98, 10, '07:45 - 08:45', 'Pranayama Mudras & Bandhas', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(99, 10, '09:00 - 09:30', 'Breakfast Yoga Philosophy & Ethics', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(100, 10, '10:45 - 11:45', 'Teaching Methodology & Alignment Adjustment', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(101, 10, '11:50 - 12:50', 'Lunch', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(102, 10, '13:00 - 13:30', 'Yoga Anatomy Physiology & Biomechanics', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(103, 10, '14:30 - 15:30', 'Ayurveda / Mantra Chanting', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(104, 10, '15:40 - 16:20', 'Advanced Ashtanga', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(105, 10, '16:30 - 18:00', 'Vinyasa Yoga', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(106, 10, '18:00 - 19:00', 'Meditation / Yoga Nidra', '2023-10-31 00:01:37', '2023-10-31 00:01:37'),
(107, 10, '19:15 - 20:00', 'Dinner...', '2023-10-31 00:01:37', '2023-10-31 00:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `coursetestimonials`
--

CREATE TABLE `coursetestimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursetestimonials`
--

INSERT INTO `coursetestimonials` (`id`, `course_id`, `name`, `review`, `created_at`, `updated_at`) VALUES
(4, 1, 'Diana Stepanova', 'A great yoga teacher training course for instructors who want to start a yoga and mindfulness program. It follows the complete Yoga curriculum which I particularly appreciate. A collection of suggestions for adding mindfulness to a regular school schedule and Guided Meditation is also offered. Nirvana Yoga School has carefully created it for students to utilize in their classrooms!', '2023-10-11 02:21:09', '2023-10-11 02:21:09'),
(5, 1, 'Michel Torres', 'I would recommend Nirvana Yoga School and its instructors without reservation to anybody searching for individualized, skilled attention in the yoga teaching field. They have a highly skilled and certified team of yoga teachers.', '2023-10-11 02:21:09', '2023-10-11 02:21:09'),
(6, 1, 'Suzanne Sebestova', 'My 200-hour YTT Course at Nirvana Yoga School is life-changing for me. I learned a lot about yoga, its history, and its philosophy. Delicious foods, great scenery, and luxurious rooms are the best. Highly recommended for new yoga students.', '2023-10-11 02:21:09', '2023-10-11 02:21:09'),
(7, 1, 'Zhu Chong', 'I was searching for the best yoga schools in India to learn traditional yoga. Nirvana Yoga School stood out to me. I chose the training course and traveled all the way to Rishikesh and believe me the visit was totally worth it. They have a team of the most experienced and highly skilled yoga teachers along with Staff support.', '2023-10-11 02:21:09', '2023-10-11 02:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `customcodes`
--

CREATE TABLE `customcodes` (
  `id` int(11) NOT NULL,
  `css` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `js` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0->Course, 1->workshop\r\n',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `country`, `phone`, `course`, `gender`, `room`, `message`, `type`, `created_at`, `updated_at`) VALUES
(2, 'Himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7412589630', '300 Hour Yoga Teacher Training In Rishikesh India', 'female', '2 Shared Room', 'test', 0, '2023-10-12 02:48:55', '2023-10-12 02:48:55'),
(3, 'Himanshu Singh', 'himanshu01eglobalsoft@gmail.com', 'New Zealand', '7412589630', 'Mindfulness', 'male', 'Online Workshop', 'this is for testing', 1, '2023-10-19 03:37:34', '2023-10-19 03:37:34'),
(4, 'Shubham', 'shubham@gmail.com', 'Australia', '7412589630', '200 Hour Yoga Teacher Training in Rishikesh India', 'male', 'Private Room', 'tesing', 0, '2023-10-19 03:38:25', '2023-10-19 03:38:25'),
(5, 'Alex Hales', 'alex@gmail.com', 'South Africa', '7417417410', 'Mindfulness', 'male', 'Online Workshop', NULL, 1, '2023-10-19 03:48:28', '2023-10-19 03:48:28'),
(6, 'tet', 'himanshu01eglobalsoft@gmail.com', 'United Arab Emirates (‫الإمارات العربية المتحدة‬‎)', '7412589632', '300 Hour Yoga Teacher Training In Rishikesh India', 'female', '2 Shared Room', 'test', 0, '2023-10-19 23:17:44', '2023-10-19 23:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE `errors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fixissues`
--

CREATE TABLE `fixissues` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `countrycode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `issue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `device` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `os` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `email`, `country`, `phone`, `subject`, `comment`, `created_at`, `updated_at`) VALUES
(10, 'Himanshu', 'singh@gmail.com', 'India (भारत)', '7896541230', 'test form', 'test forms', '2023-10-10 04:44:54', '2023-10-10 04:44:54'),
(11, 'Himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7412589630', 'this is etst frms', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.', '2023-10-10 04:46:54', '2023-10-10 04:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `founders`
--

CREATE TABLE `founders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `founders`
--

INSERT INTO `founders` (`id`, `name`, `position`, `image`, `alt`, `facebook`, `twitter`, `instagram`, `gmail`, `created_at`, `updated_at`) VALUES
(3, 'Smith Jones', 'Yoga Teacher', '/upload/founder/6526246e8fe54team2.jpg', 'Smith Jones', '#', '#', NULL, NULL, '2023-10-10 22:58:30', '2023-10-10 22:58:30'),
(4, 'Maria Redwood', 'Co-Founder', '/upload/founder/652624af9a088team3.jpg', 'Maria Redwood', '#', '#', '#', NULL, '2023-10-10 22:59:35', '2023-10-10 22:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `caption`, `image`, `alt`, `created_at`, `updated_at`) VALUES
(2, 'yoga', '/upload/founder/652681a0873a3gallery-item-small1.jpg', 'img', '2023-10-11 05:36:08', '2023-10-11 05:36:08'),
(3, 'gallery2', '/upload/founder/652682f5db1dbgallery-item-small5.jpg', 'gallery2', '2023-10-11 05:41:49', '2023-10-11 05:41:49'),
(4, 'gallery 3', '/upload/founder/65268305e04edgallery-item-small7.jpg', 'gallery 3', '2023-10-11 05:42:05', '2023-10-11 05:42:05'),
(5, 'gallery4', '/upload/founder/65268317d1c59gallery-item-small15.jpg', 'gallery4', '2023-10-11 05:42:23', '2023-10-11 05:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(58, '2023_10_06_143148_create_courseschdules_table', 10),
(59, '2023_10_10_092038_create_forms_table', 11),
(60, '2023_10_10_142201_create_founders_table', 12),
(61, '2023_10_11_100131_create_galleries_table', 13),
(62, '2023_10_12_045833_create_enquiries_table', 14),
(63, '2023_10_13_070053_create_coursemedia_table', 15),
(64, '2023_10_13_131821_create_coursedates_table', 16),
(65, '2023_10_14_100618_create_workshops_table', 17),
(67, '2023_10_16_143746_create_workshopmodules_table', 18),
(70, '2023_10_17_113716_create_workshopexcepts_table', 19),
(71, '2023_10_18_045616_create_bookingforms_table', 20),
(72, '2023_10_17_071528_create_workshoptestimonials_table', 21),
(73, '2023_10_18_081254_create_workshopresources_table', 22),
(74, '2023_10_25_135203_create_orders_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_token_id` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_id` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_order_id` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_payment_id` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_signature` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=fail or 1=success',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `book_id`, `form_id`, `course_id`, `amount`, `payment_token_id`, `payer_id`, `razorpay_order_id`, `razorpay_payment_id`, `razorpay_signature`, `status`, `created_at`, `updated_at`) VALUES
(3, 'ODR0006', 5, 1, 105, NULL, NULL, 'order_MtVeVsccZFlPCj', 'pay_MtVfBEA5HTSgrN', 'd126c8eeac30923b800bb2e4efec793356e0cdd4ed7ba3895bc04670fe84fd74', 1, '2023-10-27 23:51:21', '2023-10-27 23:52:07'),
(4, 'ODR0007', 6, 1, 105, NULL, NULL, 'order_MtVgwwZtMKkRUR', NULL, NULL, 0, '2023-10-27 23:53:40', '2023-10-27 23:53:40'),
(5, 'ODR0008', 7, 2, 90, NULL, NULL, 'order_MtVhcBcEp0aCi7', 'pay_MtVhsDMmrGzOY8', '664f04a201133cdd5fa196120e05b3e425a44fc63e6207741ec7257f2a714b0b', 1, '2023-10-27 23:54:18', '2023-10-27 23:54:40'),
(6, 'ODR0009', 8, 2, 599, NULL, NULL, 'order_MtVlUXojuN8wTz', 'pay_MtVllRoLN49kb7', 'c6050c42d2ff2cf40171ad56f4291b2399b42241fd7d2e08cd0770ce394a190b', 1, '2023-10-27 23:57:58', '2023-10-27 23:58:21'),
(7, 'ODR00010', 9, 1, 105, NULL, NULL, 'order_MtVnBzAG3cJGXz', 'pay_MtVnP3X662x0jb', '966f15d79ddbfb1daa94c9ab7268f0c4697b58e0bd6b99468e99ff0979953925', 1, '2023-10-27 23:59:35', '2023-10-27 23:59:52'),
(8, 'ODR00011', 10, 1, 699, NULL, NULL, NULL, NULL, NULL, 0, '2023-10-28 01:02:28', '2023-10-28 01:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `setup` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metakeyword` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadescription` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `likes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakeyword` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `name`, `slug`, `image`, `alt`, `description`, `metatitle`, `metakeyword`, `metadescription`, `status`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, '/upload/seo/652628ca6c4c411-9-heart-of-yoga-logo-v8-final.png', 'bluetooth printer setup', NULL, 'Heart of Yoga', 'Yoga in rishikesh', 'heart of yoga in rishikesh', 1, '2023-06-14 01:45:40', '2023-10-10 23:17:06'),
(10, 'aboutus', NULL, '/upload/seo/652628fc849e5aboutpng.webp', NULL, NULL, 'About us | Heart of Yoga', 'Yoga in rishikesh', 'About us | Heart of Yoga', 0, '2023-09-22 05:06:08', '2023-10-10 23:17:56'),
(11, 'contactus', NULL, '/upload/seo/65262927b3f48aboutpng.webp', NULL, NULL, 'Contact Us | Heart of yoga', 'Heart of yoga', 'Contact Us | Heart of yoga', 0, '2023-10-10 23:18:39', '2023-10-10 23:18:39'),
(12, 'blog', NULL, '/upload/seo/65262958950ae11-9-heart-of-yoga-logo-v8-final.png', NULL, NULL, 'Blog | Heart of yoga', 'Blog', 'Blog | Heart of yoga', 0, '2023-10-10 23:19:28', '2023-10-10 23:19:28'),
(13, 'testimonial', NULL, '/upload/seo/65262979242f3aboutpng.webp', NULL, NULL, 'Heart of yoga  | Testimonial', 'Heart of yoga', 'Heart of yoga  | Testimonial', 0, '2023-10-10 23:20:01', '2023-10-10 23:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usmobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logoalt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fevicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `robots` tinyint(1) NOT NULL DEFAULT 0,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disclaimer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `url`, `email`, `usmobile`, `logo`, `logoalt`, `fevicon`, `robots`, `address`, `disclaimer`, `created_at`, `updated_at`) VALUES
(1, 'Heart of Yoga Institute', 'https://heartofyogainstitute.com/', 'info@heartofyogainstitute.com', '+91-7894561230', '/upload/setting/6525167c68d8blogo.png', 'Heart of Yoga Institute', '/upload/setting/6525167c6938aloading-logo.png', 0, 'Rishikesh Uttrakhand', 'All brand names, trademarks, images mentioned on this website are for reference only, and they belongs to their respective owners.', '0000-00-00 00:00:00', '2023-10-11 06:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `staticpages`
--

CREATE TABLE `staticpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metakeyword` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staticpages`
--

INSERT INTO `staticpages` (`id`, `name`, `slug`, `description`, `metatitle`, `metakeyword`, `metadescription`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', 'privacy-policy', '<p dir=\"ltr\">Coming Soon</p>', 'Privacy Policy', 'Privacy Policy', 'Comming Soon', 1, '2023-06-14 01:22:59', '2023-10-11 07:04:33'),
(2, 'Terms & Conditions', 'terms-condition', '<p dir=\"ltr\">Terms &amp; Conditions</p>', 'Terms & Conditions', 'Terms & Conditions', 'Terms & Conditions', 1, '2023-06-14 01:23:20', '2023-10-11 06:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metakeyword` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadescription` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(1) DEFAULT 0,
  `youtube` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `course`, `review`, `type`, `youtube`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Alex', '/upload/testimonial/6523b943ecb7bteacher-img.jpg', 'course1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, NULL, 1, '2023-10-06 05:41:53', '2023-10-09 02:56:43'),
(5, 'Harry', '/upload/testimonial/6523b96a12b6ateacher-img.jpg', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, NULL, 1, '2023-10-09 02:57:22', '2023-10-09 02:58:11'),
(6, 'Max', '/upload/testimonial/6523b98a3ab59teacher-img.jpg', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 0, NULL, 1, '2023-10-09 02:57:54', '2023-10-09 02:57:54'),
(7, 'Calvin William', '/upload/testimonial/652a42a57da93user.webp', NULL, NULL, 1, 'D0UnqGm_miA', 1, '2023-10-14 01:56:29', '2023-10-14 01:56:29'),
(8, 'Mark Jonsen', '/upload/testimonial/652a42fd80a36user2.webp', NULL, 'rwar', 1, '9xwazD5SyVg', 1, '2023-10-14 01:57:57', '2023-10-14 02:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `workshopexcepts`
--

CREATE TABLE `workshopexcepts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workshop_id` bigint(20) UNSIGNED NOT NULL,
  `except` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshopexcepts`
--

INSERT INTO `workshopexcepts` (`id`, `workshop_id`, `except`, `created_at`, `updated_at`) VALUES
(3, 1, 'Integrate mindfulness in daily life', '2023-10-19 01:49:38', '2023-10-19 01:49:38'),
(4, 1, 'Build emotional intelligence', '2023-10-19 01:49:38', '2023-10-19 01:49:38'),
(5, 1, 'Enhanced awareness and attention', '2023-10-19 01:49:38', '2023-10-19 01:49:38'),
(6, 1, 'Deep understanding of mind-body connection', '2023-10-19 01:49:38', '2023-10-19 01:49:38'),
(7, 2, 'Rewire your brain to eliminate distractions', '2023-10-19 07:52:05', '2023-10-19 07:52:05'),
(8, 2, 'Acquire skills to promote concentration', '2023-10-19 07:52:05', '2023-10-19 07:52:05'),
(9, 2, 'Time management and self-discipline', '2023-10-19 07:52:05', '2023-10-19 07:52:05'),
(10, 2, 'Strategic decision making and implementation', '2023-10-19 07:52:05', '2023-10-19 07:52:05'),
(11, 2, 'Align with your goal', '2023-10-19 07:52:05', '2023-10-19 07:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `workshopmodules`
--

CREATE TABLE `workshopmodules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workshop_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshopmodules`
--

INSERT INTO `workshopmodules` (`id`, `workshop_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(4, 1, 'Module 1: Introduction to Mindfulness', '<ul><li>Understanding the concept and benefits of mindfulness</li><li>Exploring the science behind mindfulness</li><li>Cultivating an open and non-judgmental attitude</li></ul>', '2023-10-19 01:51:48', '2023-10-19 01:51:48'),
(5, 1, 'Module 2: Body Scan Meditation', '<ul><li>Introduction to body scan meditation</li><li>Guided practice for bringing awareness to bodily sensations</li><li>Developing a sense of connection between mind and body</li></ul>', '2023-10-19 01:51:48', '2023-10-19 01:51:48'),
(6, 1, 'Module 3: Breath Awareness', '<ul><li>Focusing on the breath as an anchor for mindfulness</li><li>Techniques for observing the breath without judgment</li><li>Mindful breathing exercises and practices</li></ul>', '2023-10-19 01:51:48', '2023-10-19 01:51:48'),
(7, 1, 'Module 4: Mindful Eating', '<ul><li>Exploring the practice of mindful eating</li><li>Engaging the senses and bringing awareness to food</li><li>Developing a healthier relationship with food through mindfulness</li></ul>', '2023-10-19 01:51:48', '2023-10-19 01:51:48'),
(8, 1, 'Module 5: Cultivating Gratitude and Compassion', '<ul><li>Practicing gratitude as a form of mindfulness</li><li>Techniques for cultivating self-compassion and compassion for others</li><li>Embracing kindness and empathy in daily life</li></ul>', '2023-10-19 01:51:48', '2023-10-19 01:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `workshopresources`
--

CREATE TABLE `workshopresources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workshop_id` bigint(20) UNSIGNED NOT NULL,
  `resources` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshopresources`
--

INSERT INTO `workshopresources` (`id`, `workshop_id`, `resources`, `created_at`, `updated_at`) VALUES
(3, 1, 'dd1', '2023-10-18 02:57:10', '2023-10-18 02:57:10'),
(4, 1, 'dd3', '2023-10-18 02:57:10', '2023-10-18 02:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onlineprice` int(11) DEFAULT NULL,
  `inpersonprice` int(11) DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt2` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt3` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt4` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt5` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metakeywords` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadescription` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `name`, `slug`, `image`, `alt`, `duration`, `session`, `onlineprice`, `inpersonprice`, `about`, `image2`, `image3`, `image4`, `image5`, `alt2`, `alt3`, `alt4`, `alt5`, `metatitle`, `metakeywords`, `metadescription`, `created_at`, `updated_at`) VALUES
(1, 'Mindfulness', 'mindfulness', '/upload/course/652d458c82363online1-1.jpg', 'Mindfulness', '15 Days', '25', 299, 599, '<p>Enhance your awareness and attention to the highest level. Learn to build productivity and break the shackles of distraction. Earn certificate upon completion</p>', '/upload/workshop/653102aaafa53online5-1.webp', '/upload/workshop/653102aaafdb1online2-1.webp', '/upload/workshop/653102aab01b0online3-1.webp', '/upload/workshop/653102aab03feonline4-1.webp', 'Mindfulness2', 'Mindfulness3', 'Mindfulness4', 'Mindfulness5', 'Mindfulness', 'Mindfulness', 'Enhance your awareness and attention to the highest level. Learn to build productivity and break the shackles of distraction. Earn certificate upon completion', '2023-10-16 08:45:40', '2023-10-19 04:49:22'),
(2, 'Stress Management', 'stress-management', '/upload/workshop/65312d0b7faf9online1-1-600x450.webp', '1', '15 Days', '12', 699, 899, '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,sans-serif,sans-serif; font-size:16px\">Master stress and transform yourself to deal with the stressors stemming from personal problems, jobs, or family. Understand self-perception to unleash your inner potential. Develop emotional intelligence and enhance self-expression.</span></p>', '/upload/workshop/65312d0b804e7online4-1.webp', '/upload/workshop/65312d0b80855online5-1.webp', '/upload/workshop/65312d0b80b5aonline5-2.webp', '/upload/workshop/65312d0b80e25online2-1.webp', '2', '3', '4', '5', 'Stress Management', 'Stress Management', 'Master stress and transform yourself to deal with the stressors stemming from personal problems, jobs, or family. Understand self-perception to unleash your inner potential. Develop emotional intelligence and enhance self-expression.', '2023-10-19 07:50:11', '2023-10-19 07:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `workshoptestimonials`
--

CREATE TABLE `workshoptestimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workshop_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshoptestimonials`
--

INSERT INTO `workshoptestimonials` (`id`, `workshop_id`, `name`, `review`, `created_at`, `updated_at`) VALUES
(2, 1, 'Barry Allen', 'Learning mindfulness techniques has helped me to navigate stressful situations with greater ease and respond to challenges with', '2023-10-19 01:52:48', '2023-10-19 01:52:48'),
(3, 1, 'Noah Wood', 'I learned how to be present in the moment, let go of negative thoughts, and be more kind', '2023-10-19 01:52:48', '2023-10-19 01:52:48'),
(4, 1, 'Oliver Queen', 'I had heard about mindfulness before and always wanted to try it. Hence joined this workshop. The expert guided us through various.', '2023-10-19 01:52:48', '2023-10-19 01:52:48');

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
-- Indexes for table `bookingforms`
--
ALTER TABLE `bookingforms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookingforms_course_id_foreign` (`course_id`);

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
-- Indexes for table `coursedates`
--
ALTER TABLE `coursedates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursedates_course_id_foreign` (`course_id`);

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
-- Indexes for table `coursemedia`
--
ALTER TABLE `coursemedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursemedia_course_id_foreign` (`course_id`);

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
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
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
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founders`
--
ALTER TABLE `founders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `workshopexcepts`
--
ALTER TABLE `workshopexcepts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workshopexcepts_workshop_id_foreign` (`workshop_id`);

--
-- Indexes for table `workshopmodules`
--
ALTER TABLE `workshopmodules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workshopmodules_workshop_id_foreign` (`workshop_id`);

--
-- Indexes for table `workshopresources`
--
ALTER TABLE `workshopresources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workshopresources_workshop_id_foreign` (`workshop_id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshoptestimonials`
--
ALTER TABLE `workshoptestimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workshoptestimonials_workshop_id_foreign` (`workshop_id`);

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
-- AUTO_INCREMENT for table `bookingforms`
--
ALTER TABLE `bookingforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `coursedates`
--
ALTER TABLE `coursedates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `coursefaqs`
--
ALTER TABLE `coursefaqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courseinclusions`
--
ALTER TABLE `courseinclusions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `coursemedia`
--
ALTER TABLE `coursemedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courseschdules`
--
ALTER TABLE `courseschdules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `coursetestimonials`
--
ALTER TABLE `coursetestimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customcodes`
--
ALTER TABLE `customcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `founders`
--
ALTER TABLE `founders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `workshopexcepts`
--
ALTER TABLE `workshopexcepts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `workshopmodules`
--
ALTER TABLE `workshopmodules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `workshopresources`
--
ALTER TABLE `workshopresources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshoptestimonials`
--
ALTER TABLE `workshoptestimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `bookingforms`
--
ALTER TABLE `bookingforms`
  ADD CONSTRAINT `bookingforms_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `coursedates`
--
ALTER TABLE `coursedates`
  ADD CONSTRAINT `coursedates_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `coursemedia`
--
ALTER TABLE `coursemedia`
  ADD CONSTRAINT `coursemedia_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

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

--
-- Constraints for table `workshopexcepts`
--
ALTER TABLE `workshopexcepts`
  ADD CONSTRAINT `workshopexcepts_workshop_id_foreign` FOREIGN KEY (`workshop_id`) REFERENCES `workshops` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workshopmodules`
--
ALTER TABLE `workshopmodules`
  ADD CONSTRAINT `workshopmodules_workshop_id_foreign` FOREIGN KEY (`workshop_id`) REFERENCES `workshops` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workshopresources`
--
ALTER TABLE `workshopresources`
  ADD CONSTRAINT `workshopresources_workshop_id_foreign` FOREIGN KEY (`workshop_id`) REFERENCES `workshops` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workshoptestimonials`
--
ALTER TABLE `workshoptestimonials`
  ADD CONSTRAINT `workshoptestimonials_workshop_id_foreign` FOREIGN KEY (`workshop_id`) REFERENCES `workshops` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
