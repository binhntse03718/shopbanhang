<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(userSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(newsSeeder::class);
        $this->call(slideSeeder::class);
        $this->call(product_typeSeeder::class);
    }

}

class slideSeeder extends Seeder {
    public function run()
    {
        DB::table('slide')->insert([
                ['image' => 'slide1.jpg'],
                ['image' => 'slide2.jpg'],
                ['image' => 'slide3.png']]);
    }
}

class newsSeeder extends Seeder {
    public function run()
    {
        DB::table('news')->insert([
                ['title' => 'ALL-NEW FORD BRONCO SPORT RUGGED SMALL SUV EQUIPPED FOR TRAILS WITH STANDARD 4X4 AND BUILT WILD CAPABILITY AND CONFIDENCE', 'content' => 'With unmistakable Bronco styling and unrelenting Bronco capability, the smaller sibling of Bronco two-door and first-ever four-door SUVs joins the family with its own idea of fun. As with all Broncos, 4x4 is standard, and this rugged SUV is engineered to handle whatever weekend adventure its owner has in mind. “Bronco Sport has the toughness and smarts to help turn off-road novices into 4x4 pros,” said Hau Thai-Tang, Ford chief product development and purchasing officer. “Bronco Sport embraces the needs of outdoor enthusiasts – every inch of it was designed and engineered with weekend adventurers in mind.”', 'image' => 'news-ford.jpg'],
                ['title' => '2020 Honda City Launch in India LIVE Updates: Price, Variants, Features and More', 'content' => 'The Honda City has been the benchmark when it comes to sedans in India as it not only has been the most popular sedan to be launched in our market, but it has always been the trendsetter for the upcoming launches. Now, Honda Car India has launched the fifth generation of the Honda City in India at a starting price of Rs 10.90 lakh (ex-showroom, Delhi).', 'image' => 'news-honda.jpg'],
                ['title' => 'Hyundai XCIENT Fuel Cell Heads to Europe for Commercial Use', 'content' => 'XCIENT Fuel Cell is a present-day reality, not as a mere future drawing board project. By putting this ground-breaking vehicle on the road now, Hyundai marks a significant milestone in the history of commercial vehicles and the development of hydrogen society. Building a comprehensive hydrogen ecosystem, where critical transportation needs are met by vehicles like XCIENT Fuel Cell, will lead to a paradigm shift that removes automobile emissions from the environmental equation. Having introduced the world’s first mass-produced fuel-cell electric passenger vehicle, the ix35, and the second-generation fuel cell electric vehicle, the NEXO, Hyundai is now leveraging decades of experience, world-leading fuel-cell technology, and mass-production capability to advance hydrogen in the commercial vehicle sector with the XCIENT Fuel Cell.', 'image' => 'news-hyundai.jpg'],
                ['title' => 'Sonet, Kias most-awaited car, all set to break cover on August 7', 'content' => 'Kia Motor is gearing up to showcase Sonet and announced on Tuesday that the world premier of the sub-compact SUV will take place on August 7. Sonet was first showcased in concept form at Auto Expo in February of 2020 and the production version is likely to retain most of the key exterior elements that were on display. Kia made its India debut in 2019 but has catapulted itself among the big players in less than a year courtesy the success of Seltos. The Carnival MPV was launched at Auto Expo and has had some degree of success despite the challenges that plague the overall auto industry. The Koreans, however, are almost certain of Sonets success because it fits right into the extremely lucrative - and extremely competitive, sub-compact SUV segment which currently has Maruti Suzuki Vitara Brezza and Hyundai Venue as the top players.', 'image' => 'news-kia.jpg'],
                ['title' => '2020 Mazda 3 Hatchback Test: One of Our Favorite Affordable New Cars', 'content' => 'For those who havent paid attention, the Mazda 3 has been a solid, affordable, fun-to-drive car for years, and the latest generation has surprised the Automobile staff more than once. And earlier this year, we validated Mazdas work on the car by awarding it Automobile All-Stars honors. A brief recap of our editors thoughts about the car:"What the Mazda 3 has working against it in this star-studded All-Stars crowd—economy and potential anonymity—it makes up for with honest-to-goodness excellence.', 'image' => 'news-mazda.jpg']]);
    }
}

class product_typeSeeder extends Seeder {
    public function run() {
        DB::table('type_products')->insert([
                ['id' => '1', 'name' => 'Ford', 'description' => 'Ford Việt Nam sẽ tiếp tục hợp tác chặt chẽ với hệ thống Đại lý ủy quyền trên toàn quốc để cùng nhau vượt qua giai đoạn thử thách này', 'image' => 'ford_escape.jpg'],
                ['id' => '2', 'name' => 'Honda', 'description' => 'Hiểu rõ xe máy là phương tiện đi lại quan trọng và chủ yếu tại Việt Nam, Honda Việt Nam luôn nỗ lực hết mình cung cấp cho khách hàng những sản phẩm xe máy có chất lượng cao nhất với giá cả hợp lý được sản xuất từ những nhà máy thân thiện với môi trường.', 'image' => 'honda_crv.jpg'],
                ['id' => '3', 'name' => 'Hyundai', 'description' => 'Hyundai Accent và Grand i10 tiếp tục là những mẫu xe ăn khách nhất của TC MOTOR với 1,163 xe và 1,022 xe bán ra trong tháng 6, cộng dồn 7,349 xe và 6,414 xe trong 6 tháng đầu năm.', 'image' => 'hyundai_santafe.jpg'],
                ['id' => '4', 'name' => 'Kia', 'description' => 'The Owners Portal is your one-stop-shop for all things Kia. When you sign up, you can book dealership appointments, see maintenance milestones, make car payments if financed by Kia Motors Finance, view owner manuals and more!', 'image' => 'kia_cerato.jpg'],
                ['id' => '5', 'name' => 'Mazda', 'description' => 'Năm 2011, Thaco hợp tác với tập đoàn Mazda Nhật Bản xây dựng nhà máy sản xuất và lắp ráp xe Mazda tại khu Kinh tế mở Chu Lai, Quảng Nam với công suất 10.000 xe/năm', 'image' => 'mazda_mx5.jpg']]);
    }
}

class userSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
           'name' => 'Nguyen Thanh Binh', 'email' => 'binh@gmail.com', 'password' => '123456789', 'gender' => 'Male', 'phone_number' => '0934385154', 'address' => '123123123']);
    }
}

class adminSeeder extends Seeder {
    public function run() {
        DB::table('admin')->insert([
            'username' => 'admin', 'password' => '123456'
        ]);
    }
}
