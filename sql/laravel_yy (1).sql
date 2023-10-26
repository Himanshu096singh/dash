-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 05:44 PM
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
  `tags` varchar(1200) DEFAULT NULL,
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
  `room` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
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
(1, 1, 'shared3room', '3', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7412589630', '0', 'test', 0, 0, 0, '2023-10-18 02:13:08', '2023-10-18 02:13:08'),
(2, 1, 'privateroom', '1', 'test', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '70456456465', '0', 'test', 0, 0, 0, '2023-10-25 08:47:31', '2023-10-25 08:47:31'),
(3, 1, 'privateroom', '1', 'test', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '70456456465', '0', 'ddd', 0, 0, 0, '2023-10-25 08:49:28', '2023-10-25 08:49:28'),
(4, 1, 'privateroom', '1', 'test', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '70456456465', '0', 'DSF', 0, 0, 0, '2023-10-25 08:50:10', '2023-10-25 08:50:10'),
(5, 1, 'shared2room', '2', 'test', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '70456456465', '0', 'rr444', 0, 0, 0, '2023-10-25 08:50:41', '2023-10-25 08:50:41'),
(6, 1, 'shared3room', '2', 'test', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '70456456465', '0', 'eee', 0, 0, 0, '2023-10-25 08:51:01', '2023-10-25 08:51:01'),
(7, 2, 'shared3room', '2', 'Himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7417417410', '134.85', 'test', 1, 0, 0, '2023-10-26 02:37:42', '2023-10-26 02:37:42'),
(8, 2, 'shared6room', '2', 'Himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7417417410', '170', 'xc', 1, 0, 0, '2023-10-26 02:40:19', '2023-10-26 02:40:19'),
(9, 2, 'shared3room', '2', 'Himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7417417410', '135', 'test', 1, 0, 0, '2023-10-26 02:50:39', '2023-10-26 02:50:39'),
(10, 2, 'shared2room', '3', 'Himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7417417410', '90', 'test', 1, 0, 0, '2023-10-26 02:52:25', '2023-10-26 02:52:25'),
(11, 2, 'shared6room', '2', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7412589630', '170', 'test', 1, 0, 0, '2023-10-26 03:45:38', '2023-10-26 03:45:38'),
(12, 1, 'privateroom', '1', 'test', 'test@gmail.com', 'Australia', '7045454544', '45', 'test', 1, 0, 0, '2023-10-26 04:00:17', '2023-10-26 04:00:17'),
(13, 1, 'shared6room', '6', 'test', 'test@gmail.com', 'Australia', '7045454544', '999', 'j', 0, 0, 0, '2023-10-26 04:08:26', '2023-10-26 04:08:26'),
(14, 2, 'shared2room', '4', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '3434343433', '599', 'test', 0, 0, 0, '2023-10-26 04:14:16', '2023-10-26 04:14:16'),
(15, 2, 'shared3room', '4', 'test', 'test@gmail.com', 'Australia', '8794564145', '135', '8794564145', 1, 0, 0, '2023-10-26 04:15:50', '2023-10-26 04:15:50'),
(16, 2, 'shared6room', '4', 'test', 'test@gmail.com', 'usa', '78945645', '170', '789', 1, 0, 0, '2023-10-26 04:17:48', '2023-10-26 04:17:48'),
(17, 2, 'shared6room', '4', 'test', 'test@gmail.com', 'United States', '78945645', '170', '789', 1, 0, 0, '2023-10-26 04:17:51', '2023-10-26 04:17:51'),
(18, 2, 'shared6room', '3', 'test', 'test@gmail.com', 'United States', '789456124', '170', 'test', 1, 1, 0, '2023-10-26 04:25:37', '2023-10-26 04:25:37'),
(19, 2, 'shared2room', '3', 'test', 'himanshu01eglobalsoft@gmail.com', 'British Indian Ocean Territory', '741258930', '90', 'test', 1, 0, 0, '2023-10-26 06:49:16', '2023-10-26 06:49:16'),
(20, 2, 'shared2room', '3', 'test', 'himanshu01eglobalsoft@gmail.com', 'British Indian Ocean Territory', '741258930', '90', 'ff', 1, 1, 0, '2023-10-26 06:49:28', '2023-10-26 06:49:28'),
(21, 2, 'shared2room', '3', 'test', 'himanshu01eglobalsoft@gmail.com', 'British Indian Ocean Territory', '741258930', '90', 'ff', 1, 1, 0, '2023-10-26 06:50:37', '2023-10-26 06:50:37'),
(22, 2, 'shared2room', '3', 'test', 'himanshu01eglobalsoft@gmail.com', 'British Indian Ocean Territory', '741258930', '90', 'dd', 1, 1, 0, '2023-10-26 06:50:43', '2023-10-26 06:50:43'),
(23, 2, 'shared2room', '3', 'test', 'himanshu01eglobalsoft@gmail.com', 'British Indian Ocean Territory', '741258930', '90', 'dd', 1, 1, 0, '2023-10-26 06:51:20', '2023-10-26 06:51:20'),
(24, 2, 'shared2room', '3', 'test', 'himanshu01eglobalsoft@gmail.com', 'British Indian Ocean Territory', '741258930', '90', 'dd', 1, 1, 0, '2023-10-26 07:17:53', '2023-10-26 07:17:53'),
(25, 2, 'shared2room', '3', 'test', 'himanshu01eglobalsoft@gmail.com', 'British Indian Ocean Territory', '741258930', '90', 'h', 1, 1, 0, '2023-10-26 07:18:25', '2023-10-26 07:18:25'),
(26, 2, 'shared2room', '2', 'tes', 'test@gmail.co', 'American Samoa', '704545455545', '90', 'test', 1, 1, 0, '2023-10-26 07:47:22', '2023-10-26 07:47:22'),
(27, 2, 'shared2room', '5', 'tes', 'test@gmail.co', 'American Samoa', '704545455545', '90', 'h', 1, 1, 0, '2023-10-26 07:51:03', '2023-10-26 07:51:03'),
(28, 2, 'shared2room', '5', 'tes', 'test@gmail.co', 'American Samoa', '704545455545', '90', 'h', 1, 1, 0, '2023-10-26 07:54:01', '2023-10-26 07:54:01'),
(29, 1, 'privateroom', '2', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '70454544454', '299', 'test', 0, 1, 0, '2023-10-26 07:55:52', '2023-10-26 07:55:52'),
(30, 2, 'shared2room', '2', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'Bouvet Island (Bouvetøya)', '7412589633', '90', 'test', 1, 1, 0, '2023-10-26 08:11:47', '2023-10-26 08:11:47'),
(31, 2, 'shared2room', '2', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'Bouvet Island (Bouvetøya)', '7412589633', '90', 'test', 1, 1, 0, '2023-10-26 08:12:48', '2023-10-26 08:12:48'),
(32, 1, 'shared2room', '4', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'British Indian Ocean Territory', '7412365895', '499', 'test', 0, 1, 0, '2023-10-26 08:29:55', '2023-10-26 08:29:55'),
(33, 2, 'shared2room', '2', 'test', 'test@gmail.com', 'India (भारत)', '7412589630', '599', 'test', 0, 1, 0, '2023-10-26 08:32:13', '2023-10-26 08:32:13'),
(34, 2, 'shared3room', '3', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7412589630', '899', 'test', 0, 1, 0, '2023-10-26 08:34:07', '2023-10-26 08:34:07'),
(35, 2, 'shared2room', '3', 'himanhu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '741258965', '599', 'test', 0, 1, 0, '2023-10-26 08:37:04', '2023-10-26 08:37:04'),
(36, 1, 'shared2room', '4', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7412589630', '75', 'test', 1, 1, 0, '2023-10-26 08:53:06', '2023-10-26 08:53:06'),
(37, 1, 'shared3room', '3', 'test', 'test@gmail.com', 'India (भारत)', '7412589630', '105', 'test', 1, 1, 0, '2023-10-26 08:58:00', '2023-10-26 08:58:00'),
(38, 1, 'shared2room', '4', 'test', 'himanshu01eglobalsoft@gmail.com', 'British Indian Ocean Territory', '741258960', '75', 'test', 1, 1, 0, '2023-10-26 09:00:53', '2023-10-26 09:00:53'),
(39, 2, 'shared2room', '3', 'test', 'test@gmail.com', 'India (भारत)', '7412589630', '90', 'test', 1, 1, 0, '2023-10-26 09:05:06', '2023-10-26 09:05:06'),
(40, 2, 'shared2room', '3', 'test', 'test@gmail.com', 'India (भारत)', '7412589630', '90', 'test', 1, 1, 0, '2023-10-26 09:09:07', '2023-10-26 09:09:07'),
(41, 2, 'shared2room', '2', 'test', 'himanshu01eglobalsoft@gmail.com', 'Botswana', '7412589635', '599', 'test', 0, 1, 0, '2023-10-26 09:09:34', '2023-10-26 09:09:34'),
(42, 2, 'shared2room', '2', 'test', 'himanshu01eglobalsoft@gmail.com', 'Botswana', '7412589635', '599', 'test', 0, 1, 0, '2023-10-26 09:10:00', '2023-10-26 09:10:00'),
(43, 2, 'shared2room', '2', 'test', 'himanshu01eglobalsoft@gmail.com', 'Botswana', '7412589635', '599', 'dsf', 0, 1, 0, '2023-10-26 09:10:21', '2023-10-26 09:10:21'),
(44, 1, 'shared3room', '3', 'himanshu', 'himanshu01eglobalsoft@gmail.com', 'India (भारत)', '7412589630', '105', 'test', 1, 1, 0, '2023-10-26 09:21:25', '2023-10-26 09:21:25');

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
(2, 1, 'Traditional Hatha Yoga', '<ul><li>Historical contexts of hatha yoga</li><li>Pawan muktasana series 1, 2 &amp; 3</li><li>Traditional Surya Namaskara (Sun Salutation)<br><br>The below asana series will be covered with the particular asana alignment &amp; adjustment, variations, contraindications, breathing techniques and their benefits<br></li></ul><ul><li>Standing asana series</li><li>Pawan muktasana series 1, 2 &amp; 3</li><li>Traditional Surya Namaskara (Sun Salutation)</li><li>Kneeling asana series</li><li>Sitting asana series</li><li>Forward bending asana series</li><li>Backward bending asana series</li><li>Twisting asana series</li><li>Arm balancing asana series</li><li>Prone asnana series</li><li>Supine asana series</li><li>Inversion asana series</li><li>Balancing asana series</li><li>Relaxing asana series</li></ul>', '2023-10-11 02:18:53', '2023-10-11 02:18:53'),
(3, 1, 'Ashtanga Vinyasa Yoga', '<ul><li>Historical contexts of Ashtanga Vinyasa yoga including different asanas.</li><li>Ashtanga Primary series Asanas with the asana alignment &amp; adjustment, variations, contraindications, breathing techniques and their benefits</li><li>Surya Namaskar A (Sun salutation A) - 9 Vinyasas</li><li>Surya Namaskar B (Sun salutation B) - 17 Vinyasas</li><li>Standing asana series</li><li>Sitting asana series</li><li>Closing sequesnce</li><li>Understanding &amp; practice of Vinyasa Flow</li></ul>', '2023-10-11 02:18:54', '2023-10-11 02:18:54'),
(4, 1, 'Alignment & Adjustment', '<p>Alignment &amp; Adjustment is the process to learn the correct ways or techniques to get in or out of an asana. You will get in-depth theories of asana, variations, alignment, and contraindications. Yoga alignment and adjustment will help you increase your mastery of yoga. You will learn different techniques and types of adjustment for the yoga sequences. It is the main idea to guide your students in each pose or asana. Adjustment is one of the important aspects of yoga. Verbal cueing is not enough, it is important for proper alignment. Students learn best through physical instruction. Our 200 hour YTTC also makes you feel more confident about hands-on adjustments. It is our top priority.<br></p>', '2023-10-11 02:18:54', '2023-10-11 02:18:54'),
(5, 1, 'Pranayama / Breathing Practices', '<ul><li>Historical contexts of Ashtanga Vinyasa yoga including different asanas.</li><li>Ashtanga Primary series Asanas with the asana alignment &amp; adjustment, variations, contraindications, breathing techniques and their benefits</li><li>Surya Namaskar A (Sun salutation A) - 9 Vinyasas</li><li>Surya Namaskar B (Sun salutation B) - 17 Vinyasas</li><li>Standing asana series</li><li>Sitting asana series</li><li>Closing sequesnce</li><li>Understanding &amp; practice of Vinyasa Flow</li></ul>', '2023-10-11 02:18:54', '2023-10-11 02:18:54'),
(6, 1, 'Mudra (Hand Gestures)', '<p><span style=\"letter-spacing: 0.3px;\">Alignment &amp; Adjustment is the process to learn the correct ways or techniques to get in or out of an asana. You will get in-depth theories of asana, variations, alignment, and contraindications. Yoga alignment and adjustment will help you increase your mastery of yoga. You will learn different techniques and types of adjustment for the yoga sequences. It is the main idea to guide your students in each pose or asana. Adjustment is one of the important aspects of yoga. Verbal cueing is not enough, it is important for proper alignment. Students learn best through physical instruction. Our 200 hour YTTC also makes you feel more confident about hands-on adjustments. It is our top priority.</span><br></p>', '2023-10-11 02:18:54', '2023-10-11 02:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `coursedates`
--

CREATE TABLE `coursedates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `seats` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursedates`
--

INSERT INTO `coursedates` (`id`, `course_id`, `date`, `seats`, `created_at`, `updated_at`) VALUES
(2, 1, '01 Jan  - 25 Jan', '5 Seat', '2023-10-13 22:48:50', '2023-10-13 22:48:50'),
(3, 1, '01 Feb - 25 Feb', '10 Seat', '2023-10-13 22:48:50', '2023-10-13 22:48:50');

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
  `inclusion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseinclusions`
--

INSERT INTO `courseinclusions` (`id`, `course_id`, `inclusion`, `created_at`, `updated_at`) VALUES
(14, 1, 'Yoga classes', '2023-10-11 02:17:06', '2023-10-11 02:17:06'),
(15, 1, 'Yoga Mat, blocks, Shatkarma kit', '2023-10-11 02:17:06', '2023-10-11 02:17:06'),
(16, 1, '3 hour Kirtan Session', '2023-10-11 02:17:06', '2023-10-11 02:17:06'),
(17, 1, 'Excursions', '2023-10-11 02:17:06', '2023-10-11 02:17:06'),
(18, 1, '3 hour Acro Yoga session', '2023-10-11 02:17:06', '2023-10-11 02:17:06'),
(19, 1, '2 hour De-stress throgh fun', '2023-10-11 02:17:06', '2023-10-11 02:17:06'),
(20, 1, 'Accommodation', '2023-10-11 02:17:06', '2023-10-11 02:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `coursemedia`
--

CREATE TABLE `coursemedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursemedia`
--

INSERT INTO `coursemedia` (`id`, `course_id`, `image`, `alt`, `created_at`, `updated_at`) VALUES
(27, 2, '/upload/course/media/65292a7de5dbenew-gallery-item7.webp', 'test1', '2023-10-13 06:01:09', '2023-10-13 06:01:25'),
(28, 2, '/upload/course/media/65292a7de6ecbnew-gallery-item3.webp', 'test5', '2023-10-13 06:01:09', '2023-10-13 06:01:58'),
(29, 2, '/upload/course/media/65292a7de7b67new-gallery-item2.webp', 'test2', '2023-10-13 06:01:09', '2023-10-13 06:01:28'),
(30, 2, '/upload/course/media/65292a7de87c8new-gallery-item6.webp', 'test3', '2023-10-13 06:01:09', '2023-10-13 06:01:31'),
(31, 2, '/upload/course/media/65292a7de9a91new-gallery-item1.webp', 'test4', '2023-10-13 06:01:09', '2023-10-13 06:01:35');

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
(2, '300 Hour Yoga Teacher Training In Rishikesh India', '300-hour-yoga-teacher-training-in-rishikesh-india', '30 Days', '300 Hour Yoga', 399, 599, 899, 1129, '<p>Our 300 hour Yoga Teacher Training in Rishikesh is an intense and advanced-level course that dives deeper into the topics covered in the&nbsp;<a href=\"https://www.nirvanayogaschoolindia.com/200-hour-yoga-teacher-training-in-rishikesh-india\" style=\"box-sizing: border-box; color: rgb(0, 0, 0);\" target=\"_blank\">200 hour yoga teacher training course</a>. The course is designed in such a way that it will deepen your yoga practice and teaching skills, thus taking you one step further towards becoming a successful yoga teacher. The training last for 29 days, during which you will get an in-depth understanding of advanced asanas (postures) and their different variations, alignment &amp; teaching techniques, advanced pranayama &amp; meditation techniques, understanding the philosophy of yoga, business skills &amp; ethics. The course will also help you focus on your personal development as a yoga teacher.</p>\r\n\r\n<p>This course is accredited by Yoga Alliance, USA, and is recognized globally. Our teachers will help you deepen your understanding of yoga philosophy, develop effective teaching skills, and cultivate the ability to create transformative experiences for your students. Complete your 300 Hour Yoga Teacher Training in India at Nirvana Yoga School and be ready to inspire others on their yogic path.</p>', '/upload/course/65291b96ef7bablog-small-img8.jpg', '300 Hour Yoga Teacher Training In Rishikesh India', '300 Hour Yoga', 'Our 300 hour Yoga Teacher Training in Rishikesh is an intense and advanced-level course that dives deeper into the topics covered in the 200 hour yoga teacher training course.', '300 Hour Yoga', 1, '2023-10-06 03:38:44', '2023-10-13 04:57:34', '200 Hr');

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
(2, 2, '05-06', 'tett1', '2023-10-06 23:53:12', '2023-10-06 23:53:12'),
(3, 1, '05:00', 'Wake up', '2023-10-11 02:20:20', '2023-10-11 02:20:20'),
(4, 1, '06:00 - 07:30', 'Traditional Hatha Yoga', '2023-10-11 02:20:20', '2023-10-11 02:20:20'),
(5, 1, '07:45 - 08:45', 'Pranayama Mudras & Bandhas', '2023-10-11 02:20:20', '2023-10-11 02:20:20'),
(6, 1, '09:00 - 09:30', 'Breakfast', '2023-10-11 02:20:20', '2023-10-11 02:20:20'),
(7, 1, '10:45 - 11:45', 'Yoga Philosophy & Ethics', '2023-10-11 02:20:20', '2023-10-11 02:20:20'),
(8, 1, '11:50 - 12:50', 'Teaching Methodology & Alignment-Adjustment', '2023-10-11 02:20:20', '2023-10-11 02:20:20'),
(9, 1, '13:00 - 13:30', 'Lunch', '2023-10-11 02:20:20', '2023-10-11 02:20:20'),
(10, 1, NULL, NULL, '2023-10-13 22:44:19', '2023-10-13 22:44:19'),
(11, 1, NULL, NULL, '2023-10-13 22:44:19', '2023-10-13 22:44:19');

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
  `css` text DEFAULT NULL,
  `js` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
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
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(600) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
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
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `gmail` varchar(255) DEFAULT NULL,
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
  `caption` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
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
  `book_id` varchar(600) DEFAULT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_token_id` varchar(100) DEFAULT NULL,
  `payer_id` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=fail or 1=success',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `book_id`, `form_id`, `course_id`, `amount`, `payment_token_id`, `payer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 3, 1, 0, NULL, NULL, 0, '2023-10-25 08:49:28', '2023-10-25 08:49:28'),
(2, NULL, 4, 1, 0, NULL, NULL, 0, '2023-10-25 08:50:10', '2023-10-25 08:50:10'),
(3, NULL, 5, 1, 0, NULL, NULL, 0, '2023-10-25 08:50:41', '2023-10-25 08:50:41'),
(4, NULL, 6, 1, 0, NULL, NULL, 0, '2023-10-25 08:51:01', '2023-10-25 08:51:01'),
(5, 'ODR0008', 7, 2, 135, NULL, NULL, 0, '2023-10-26 02:37:42', '2023-10-26 02:37:42'),
(6, 'ODR0009', 8, 2, 170, NULL, NULL, 0, '2023-10-26 02:40:19', '2023-10-26 02:40:19'),
(7, 'ODR00010', 9, 2, 135, NULL, NULL, 0, '2023-10-26 02:50:39', '2023-10-26 02:50:39'),
(8, 'ODR00011', 10, 2, 90, '6EY376471Y072094Y', NULL, 0, '2023-10-26 02:52:25', '2023-10-26 02:52:29'),
(9, 'ODR00012', 11, 2, 170, '2J674340FH706190K', NULL, 0, '2023-10-26 03:45:38', '2023-10-26 03:45:40'),
(10, 'ODR00013', 12, 1, 45, '7B815322J46028105', '2JRHYW99C4RXN', 1, '2023-10-26 04:00:17', '2023-10-26 04:00:32'),
(11, 'ODR00014', 13, 1, 999, '35577110LX6389143', '2JRHYW99C4RXN', 1, '2023-10-26 04:08:26', '2023-10-26 04:09:00'),
(12, 'ODR00015', 14, 2, 599, '42N75982MR818331T', NULL, 0, '2023-10-26 04:14:16', '2023-10-26 04:14:19'),
(13, 'ODR00016', 15, 2, 135, '2M324745RN218492V', NULL, 0, '2023-10-26 04:15:50', '2023-10-26 04:15:52'),
(14, 'ODR00017', 16, 2, 170, '40Y867434U277412S', NULL, 0, '2023-10-26 04:17:48', '2023-10-26 04:17:51'),
(15, 'ODR00018', 17, 2, 170, '5YW875854J3608431', NULL, 0, '2023-10-26 04:17:51', '2023-10-26 04:17:54'),
(16, 'ODR00019', 18, 2, 170, NULL, NULL, 0, '2023-10-26 04:25:37', '2023-10-26 04:25:37'),
(17, 'ODR00020', 19, 2, 90, '4027084082179320B', NULL, 0, '2023-10-26 06:49:16', '2023-10-26 06:49:19'),
(18, 'ODR00021', 20, 2, 90, NULL, NULL, 0, '2023-10-26 06:49:28', '2023-10-26 06:49:28'),
(19, 'ODR00022', 21, 2, 90, NULL, NULL, 0, '2023-10-26 06:50:37', '2023-10-26 06:50:37'),
(20, 'ODR00023', 22, 2, 90, NULL, NULL, 0, '2023-10-26 06:50:43', '2023-10-26 06:50:43'),
(21, 'ODR00024', 23, 2, 90, NULL, NULL, 0, '2023-10-26 06:51:20', '2023-10-26 06:51:20'),
(22, 'ODR00025', 24, 2, 90, NULL, NULL, 0, '2023-10-26 07:17:53', '2023-10-26 07:17:53'),
(23, 'ODR00026', 25, 2, 90, NULL, NULL, 0, '2023-10-26 07:18:25', '2023-10-26 07:18:25'),
(24, 'ODR00027', 26, 2, 90, NULL, NULL, 0, '2023-10-26 07:47:22', '2023-10-26 07:47:22'),
(25, 'ODR00028', 27, 2, 90, NULL, NULL, 0, '2023-10-26 07:51:03', '2023-10-26 07:51:03'),
(26, 'ODR00029', 28, 2, 90, NULL, NULL, 0, '2023-10-26 07:54:01', '2023-10-26 07:54:01'),
(27, 'ODR00030', 29, 1, 299, NULL, NULL, 0, '2023-10-26 07:55:52', '2023-10-26 07:55:52'),
(28, 'ODR00031', 30, 2, 90, NULL, NULL, 0, '2023-10-26 08:11:47', '2023-10-26 08:11:47'),
(29, 'ODR00032', 31, 2, 90, NULL, NULL, 0, '2023-10-26 08:12:48', '2023-10-26 08:12:48'),
(30, 'ODR00033', 32, 1, 499, NULL, NULL, 0, '2023-10-26 08:29:55', '2023-10-26 08:29:55'),
(31, 'ODR00034', 33, 2, 599, NULL, NULL, 0, '2023-10-26 08:32:13', '2023-10-26 08:32:13'),
(32, 'ODR00035', 34, 2, 899, NULL, NULL, 0, '2023-10-26 08:34:07', '2023-10-26 08:34:07'),
(33, 'ODR00036', 35, 2, 599, NULL, NULL, 0, '2023-10-26 08:37:04', '2023-10-26 08:37:04'),
(34, 'ODR00037', 36, 1, 75, NULL, NULL, 0, '2023-10-26 08:53:06', '2023-10-26 08:53:06'),
(35, 'ODR00038', 37, 1, 105, NULL, NULL, 0, '2023-10-26 08:58:00', '2023-10-26 08:58:00'),
(36, 'ODR00039', 38, 1, 75, NULL, NULL, 0, '2023-10-26 09:00:53', '2023-10-26 09:00:53'),
(37, 'ODR00040', 39, 2, 90, NULL, NULL, 0, '2023-10-26 09:05:06', '2023-10-26 09:05:06'),
(38, 'ODR00041', 40, 2, 90, NULL, NULL, 0, '2023-10-26 09:09:07', '2023-10-26 09:09:07'),
(39, 'ODR00042', 41, 2, 599, NULL, NULL, 0, '2023-10-26 09:09:34', '2023-10-26 09:09:34'),
(40, 'ODR00043', 42, 2, 599, NULL, NULL, 0, '2023-10-26 09:10:00', '2023-10-26 09:10:00'),
(41, 'ODR00044', 43, 2, 599, NULL, NULL, 0, '2023-10-26 09:10:21', '2023-10-26 09:10:21'),
(42, 'ODR00045', 44, 1, 105, NULL, NULL, 0, '2023-10-26 09:21:25', '2023-10-26 09:21:25');

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
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usmobile` varchar(20) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `logoalt` varchar(255) DEFAULT NULL,
  `fevicon` varchar(255) DEFAULT NULL,
  `robots` tinyint(1) NOT NULL DEFAULT 0,
  `address` varchar(200) DEFAULT NULL,
  `disclaimer` longtext NOT NULL,
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
(1, 'Privacy Policy', 'privacy-policy', '<p dir=\"ltr\">Coming Soon</p>', 'Privacy Policy', 'Privacy Policy', 'Comming Soon', 1, '2023-06-14 01:22:59', '2023-10-11 07:04:33'),
(2, 'Terms & Conditions', 'terms-condition', '<p dir=\"ltr\">Terms &amp; Conditions</p>', 'Terms & Conditions', 'Terms & Conditions', 'Terms & Conditions', 1, '2023-06-14 01:23:20', '2023-10-11 06:32:48');

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
  `type` tinyint(1) DEFAULT 0,
  `youtube` varchar(150) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `workshopexcepts`
--

CREATE TABLE `workshopexcepts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workshop_id` bigint(20) UNSIGNED NOT NULL,
  `except` varchar(255) DEFAULT NULL,
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
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
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
  `resources` varchar(255) DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `onlineprice` int(11) DEFAULT NULL,
  `inpersonprice` int(11) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `image2` varchar(600) DEFAULT NULL,
  `image3` varchar(600) DEFAULT NULL,
  `image4` varchar(600) DEFAULT NULL,
  `image5` varchar(600) DEFAULT NULL,
  `alt2` varchar(600) DEFAULT NULL,
  `alt3` varchar(600) DEFAULT NULL,
  `alt4` varchar(600) DEFAULT NULL,
  `alt5` varchar(600) DEFAULT NULL,
  `metatitle` varchar(600) NOT NULL,
  `metakeywords` varchar(600) NOT NULL,
  `metadescription` varchar(600) NOT NULL,
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
  `name` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coursedates`
--
ALTER TABLE `coursedates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coursefaqs`
--
ALTER TABLE `coursefaqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courseinclusions`
--
ALTER TABLE `courseinclusions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `coursemedia`
--
ALTER TABLE `coursemedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courseschdules`
--
ALTER TABLE `courseschdules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
