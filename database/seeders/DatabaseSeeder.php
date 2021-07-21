<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Corder;
use App\Models\Cpurchase;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Morder;
use App\Models\Sale;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\Vendor;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create( [
        'id'=>101,
        'name'=>'SuperComNet',
        'room'=>'Lot 172, Jalan PKNK 3/8,',
        'city'=>'Kawasan Perusahaan Sungai Petani',
        'district'=>'Kedah, Malaysia',
        'pin'=>'08000 Sungai Petani',
        'phone'=>'+(60-4) 371-9808',
        'email'=>'sales@supercomnet.com.my',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>102,
        'name'=>'Chanay, Jeffrey A Esq',
        'room'=>'4 B Blue Ridge Blvd',
        'city'=>'Brighton',
        'district'=>'Livingston',
        'pin'=>'48116',
        'phone'=>'8102929388',
        'email'=>'josephine_darakjy@darakjy.org',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>103,
        'name'=>'Chemel, James L Cpa',
        'room'=>'8 W Cerritos Ave #54',
        'city'=>'Bridgeport',
        'district'=>'Gloucester',
        'pin'=>'8014',
        'phone'=>'8566368749',
        'email'=>'art@venere.org',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>104,
        'name'=>'Feltz Printing Service',
        'room'=>'639 Main St',
        'city'=>'Anchorage',
        'district'=>'Anchorage',
        'pin'=>'99501',
        'phone'=>'9073854412',
        'email'=>'lpaprocki@hotmail.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>105,
        'name'=>'Printing Dimensions',
        'room'=>'34 Center St',
        'city'=>'Hamilton',
        'district'=>'Butler',
        'pin'=>'45011',
        'phone'=>'5135701893',
        'email'=>'donette.foller@cox.net',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>106,
        'name'=>'Chapman, Ross E Esq',
        'room'=>'3 Mcauley Dr',
        'city'=>'Ashland',
        'district'=>'Ashland',
        'pin'=>'44805',
        'phone'=>'4195032484',
        'email'=>'simona@morasca.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>107,
        'name'=>'Morlong Associates',
        'room'=>'7 Eads St',
        'city'=>'Chicago',
        'district'=>'Cook',
        'pin'=>'60632',
        'phone'=>'7735736914',
        'email'=>'mitsue_tollner@yahoo.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>108,
        'name'=>'Commercial Press',
        'room'=>'7 W Jackson Blvd',
        'city'=>'San Jose',
        'district'=>'Santa Clara',
        'pin'=>'95111',
        'phone'=>'4087523500',
        'email'=>'leota@hotmail.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>109,
        'name'=>'Truhlar And Truhlar Attys',
        'room'=>'5 Boston Ave #88',
        'city'=>'Sioux Falls',
        'district'=>'Minnehaha',
        'pin'=>'57105',
        'phone'=>'6054142147',
        'email'=>'sage_wieser@cox.net',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>1010,
        'name'=>'King, Christopher A Esq',
        'room'=>'228 Runamuck Pl #2808',
        'city'=>'Baltimore',
        'district'=>'Baltimore City',
        'pin'=>'21224',
        'phone'=>'4106558723',
        'email'=>'kris@gmail.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>1011,
        'name'=>'Dorl, James J Esq',
        'room'=>'2371 Jerrold Ave',
        'city'=>'Kulpsville',
        'district'=>'Montgomery',
        'pin'=>'19443',
        'phone'=>'2158741229',
        'email'=>'minna_amigon@yahoo.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>1012,
        'name'=>'Rangoni Of Florence',
        'room'=>'37275 St  Rt 17m M',
        'city'=>'Middle Island',
        'district'=>'Suffolk',
        'pin'=>'11953',
        'phone'=>'6313353414',
        'email'=>'amaclead@gmail.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>1013,
        'name'=>'Feiner Bros',
        'room'=>'25 E 75th St #69',
        'city'=>'Los Angeles',
        'district'=>'Los Angeles',
        'pin'=>'90034',
        'phone'=>'3104985651',
        'email'=>'kiley.caldarera@aol.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>14,
        'name'=>'Buckley Miller & Wright',
        'room'=>'98 Connecticut Ave Nw',
        'city'=>'Chagrin Falls',
        'district'=>'Geauga',
        'pin'=>'44023',
        'phone'=>'4407808425',
        'email'=>'gruta@cox.net',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>1015,
        'name'=>'Rousseaux, Michael Esq',
        'room'=>'56 E Morehead St',
        'city'=>'Laredo',
        'district'=>'Webb',
        'pin'=>'78045',
        'phone'=>'9565376195',
        'email'=>'calbares@gmail.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>1016,
        'name'=>'Century Communications',
        'room'=>'73 State Road 434 E',
        'city'=>'Phoenix',
        'district'=>'Maricopa',
        'pin'=>'85013',
        'phone'=>'6022774385',
        'email'=>'mattie@aol.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>1017,
        'name'=>'Bolton, Wilbur Esq',
        'room'=>'69734 E Carrillo St',
        'city'=>'Mc Minnville',
        'district'=>'Warren',
        'pin'=>'37110',
        'phone'=>'9313139635',
        'email'=>'meaghan@hotmail.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>1018,
        'name'=>'T M Byxbee Company Pc',
        'room'=>'322 New Horizon Blvd',
        'city'=>'Milwaukee',
        'district'=>'Milwaukee',
        'pin'=>'53207',
        'phone'=>'4146619598',
        'email'=>'gladys.rim@rim.org',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] );
                    
        Vendor::create( [
        'id'=>1019,
        'name'=>'Farmers Insurance Group',
        'room'=>'1 State Route 27',
        'city'=>'Taylor',
        'district'=>'Wayne',
        'pin'=>'48180',
        'phone'=>'3132887937',
        'email'=>'yuki_whobrey@aol.com',
        'status'=>'active',
        'created_at'=>'2021-05-30 20:39:16',
        'updated_at'=>'2021-05-30 20:39:16'
        ] ); 
        
        Brand::create( [
        'id'=>101,
        'name'=>'HP',
        'desc'=>'Hewlett-Packard  Information Technology Company',
        'logo'=>'th.jpg',
        'created_at'=>'2021-05-30 19:23:46',
        'updated_at'=>'2021-05-30 19:23:46'
        ] );
        
        
                    
        Brand::create( [
        'id'=>102,
        'name'=>'Acer',
        'desc'=>'Acer  Corporation',
        'logo'=>'th (1).jpg',
        'created_at'=>'2021-05-30 19:24:30',
        'updated_at'=>'2021-05-30 19:24:30'
        ] );
        
        
                    
        Brand::create( [
        'id'=>103,
        'name'=>'Dell',
        'desc'=>'Dell  Computer Technology Company',
        'logo'=>'th (2).jpg',
        'created_at'=>'2021-05-30 19:25:13',
        'updated_at'=>'2021-05-30 19:25:13'
        ] );
        
        
                    
        Brand::create( [
        'id'=>104,
        'name'=>'ASUS',
        'desc'=>'ASUS  Electronics Company',
        'logo'=>'th (3).jpg',
        'created_at'=>'2021-05-30 19:26:26',
        'updated_at'=>'2021-05-30 19:26:26'
        ] );
        
        
                    
        Brand::create( [
        'id'=>105,
        'name'=>'Lenovo',
        'desc'=>'Lenovo  Multinational Technology Company',
        'logo'=>'th (4).jpg',
        'created_at'=>'2021-05-30 19:27:12',
        'updated_at'=>'2021-05-30 19:27:12'
        ] );
        
        
                    
        Brand::create( [
        'id'=>106,
        'name'=>'Zebronics',
        'desc'=>'Zebronics Organization',
        'logo'=>'th (5).jpg',
        'created_at'=>'2021-05-30 19:28:29',
        'updated_at'=>'2021-05-30 19:28:29'
        ] );
        
        
                    
        Brand::create( [
        'id'=>107,
        'name'=>'SanDisk',
        'desc'=>'SanDisk  Corporation',
        'logo'=>'th (6).jpg',
        'created_at'=>'2021-05-30 19:29:44',
        'updated_at'=>'2021-05-30 19:29:44'
        ] );
        
        
                    
        Brand::create( [
        'id'=>108,
        'name'=>'Kingston',
        'desc'=>'Kingston Technology Computer Technology Corporation',
        'logo'=>'th (7).jpg',
        'created_at'=>'2021-05-30 19:30:35',
        'updated_at'=>'2021-05-30 19:30:35'
        ] );
        
        
                    
        Brand::create( [
        'id'=>109,
        'name'=>'CORSAIR',
        'desc'=>'CORSAIR  Company',
        'logo'=>'th (8).jpg',
        'created_at'=>'2021-05-30 19:31:15',
        'updated_at'=>'2021-05-30 19:31:15'
        ] );
        
        
                    
        Brand::create( [
        'id'=>1010,
        'name'=>'Intel',
        'desc'=>'Intel  Technology Company',
        'logo'=>'th (9).jpg',
        'created_at'=>'2021-05-30 19:31:57',
        'updated_at'=>'2021-05-30 19:31:57'
        ] );
        
        
                    
        Brand::create( [
        'id'=>1011,
        'name'=>'Sony',
        'desc'=>'Sony  Corporation',
        'logo'=>'th (10).jpg',
        'created_at'=>'2021-05-30 19:32:48',
        'updated_at'=>'2021-05-30 19:32:48'
        ] );
        
        
                    
        Brand::create( [
        'id'=>1012,
        'name'=>'Toshiba',
        'desc'=>'Toshiba  Japanese Multinational Conglomerate',
        'logo'=>'th (11).jpg',
        'created_at'=>'2021-05-30 19:33:31',
        'updated_at'=>'2021-05-30 19:33:31'
        ] );
        
        
                    
        Brand::create( [
        'id'=>1013,
        'name'=>'AMD',
        'desc'=>'Advanced Micro Devices  Semiconductor Company',
        'logo'=>'th (12).jpg',
        'created_at'=>'2021-05-30 19:34:15',
        'updated_at'=>'2021-05-30 19:34:15'
        ] );


        Category::create( [
        'id'=>101,
        'name'=>'Laptops',
        'desc'=>'Sleek, compact, powerful laptops give you all the advantages of a desktop computer with added mobility and more.',
        'image'=>'024-laptop.svg',
        'created_at'=>'2021-05-30 17:27:16',
        'updated_at'=>'2021-06-01 06:44:27'
        ] );
        
        
                    
        Category::create( [
        'id'=>102,
        'name'=>'Desktops',
        'desc'=>'Desktop computers as the name suggests are those computers which require desk and space and that is the reason why they can be used at a single location only.',
        'image'=>'027-pc.svg',
        'created_at'=>'2021-05-30 17:29:40',
        'updated_at'=>'2021-06-01 06:46:42'
        ] );
        
        
                    
        Category::create( [
        'id'=>103,
        'name'=>'Accessories',
        'desc'=>'They are every peripheral that you attach to your computer but they are not built-in within your device.',
        'image'=>'026-mouse.svg',
        'created_at'=>'2021-05-30 17:33:05',
        'updated_at'=>'2021-06-01 06:47:02'
        ] );
        
        
                    
        Category::create( [
        'id'=>104,
        'name'=>'Peripherals',
        'desc'=>'A peripheral device is an internal or external device that connects directly to a computer but does not contribute to the computer\'s primary function, such as computing.',
        'image'=>'030-printer.svg',
        'created_at'=>'2021-05-30 17:39:21',
        'updated_at'=>'2021-06-01 06:47:35'
        ] );
        
        
                    
        Category::create( [
        'id'=>105,
        'name'=>'Storage',
        'desc'=>'A storage device is any type of computing hardware that is used for storing, porting or extracting data files and objects.',
        'image'=>'018-harddisk.svg',
        'created_at'=>'2021-06-03 04:50:14',
        'updated_at'=>'2021-06-03 04:50:14'
        ] );


        Subcategory::create( [
        'id'=>101,
        'cid'=>104,
        'name'=>'Printers',
        'desc'=>'Peripheral for printing papers.',
        'created_at'=>'2021-05-30 13:31:16',
        'updated_at'=>'2021-06-03 04:46:30'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>102,
        'cid'=>104,
        'name'=>'Monitors',
        'desc'=>'Peripheral Displays',
        'created_at'=>'2021-05-30 13:31:46',
        'updated_at'=>'2021-06-03 04:46:42'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>103,
        'cid'=>104,
        'name'=>'Scanners',
        'desc'=>'Peripheral for scanning documents',
        'created_at'=>'2021-05-30 13:32:22',
        'updated_at'=>'2021-06-03 04:46:51'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>104,
        'cid'=>104,
        'name'=>'Projectors',
        'desc'=>'Projecting display',
        'created_at'=>'2021-05-30 13:33:16',
        'updated_at'=>'2021-06-03 04:46:59'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>105,
        'cid'=>103,
        'name'=>'Keyboards',
        'desc'=>'Keyboards in accessories',
        'created_at'=>'2021-05-30 13:34:32',
        'updated_at'=>'2021-06-03 04:47:10'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>106,
        'cid'=>103,
        'name'=>'Mouse',
        'desc'=>'Mouse in Accessories',
        'created_at'=>'2021-05-30 13:35:36',
        'updated_at'=>'2021-06-03 04:47:18'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>107,
        'cid'=>103,
        'name'=>'Other Accessories',
        'desc'=>'All other accessories',
        'created_at'=>'2021-05-30 13:36:07',
        'updated_at'=>'2021-06-03 04:47:27'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>108,
        'cid'=>101,
        'name'=>'General Purpose Laptops',
        'desc'=>'General purpose laptops with minimal specifications',
        'created_at'=>'2021-05-30 13:38:17',
        'updated_at'=>'2021-05-30 13:38:17'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>109,
        'cid'=>101,
        'name'=>'Gaming Laptops',
        'desc'=>'High Performance laptops for gaming purpose',
        'created_at'=>'2021-05-30 13:38:54',
        'updated_at'=>'2021-05-30 13:38:54'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1010,
        'cid'=>101,
        'name'=>'Business Laptops',
        'desc'=>'Business Purpose Special Laptops(Office use)',
        'created_at'=>'2021-05-30 13:41:05',
        'updated_at'=>'2021-05-30 13:41:05'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1011,
        'cid'=>101,
        'name'=>'Professional Laptops',
        'desc'=>'High Performance laptops for Professionals',
        'created_at'=>'2021-05-30 13:42:00',
        'updated_at'=>'2021-05-30 13:42:00'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1012,
        'cid'=>102,
        'name'=>'General Purpose Desktops',
        'desc'=>'General purpose Desktops with minimal specifications',
        'created_at'=>'2021-05-30 08:08:17',
        'updated_at'=>'2021-06-03 04:47:37'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1013,
        'cid'=>102,
        'name'=>'Gaming Desktops',
        'desc'=>'High Performance Desktops for gaming purpose',
        'created_at'=>'2021-05-30 08:08:54',
        'updated_at'=>'2021-06-03 04:47:50'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1014,
        'cid'=>102,
        'name'=>'Business Desktops',
        'desc'=>'Business Purpose Special Desktops(Office use)',
        'created_at'=>'2021-05-30 08:11:05',
        'updated_at'=>'2021-06-03 04:48:07'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1015,
        'cid'=>102,
        'name'=>'Professional Desktops',
        'desc'=>'High Performance Desktops for Professionals',
        'created_at'=>'2021-05-30 08:12:00',
        'updated_at'=>'2021-06-03 04:48:21'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1016,
        'cid'=>105,
        'name'=>'PenDrives',
        'desc'=>'Memory stick for storage',
        'created_at'=>'2021-05-30 13:47:16',
        'updated_at'=>'2021-06-03 04:50:32'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1017,
        'cid'=>105,
        'name'=>'Memory Card',
        'desc'=>'Data storage card',
        'created_at'=>'2021-05-30 13:48:05',
        'updated_at'=>'2021-06-03 04:50:40'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1018,
        'cid'=>105,
        'name'=>'Internal Hard Disks',
        'desc'=>'Hard Disk storage device for internal use',
        'created_at'=>'2021-05-30 13:48:50',
        'updated_at'=>'2021-06-03 04:50:49'
        ] );
        
        
                    
        Subcategory::create( [
        'id'=>1019,
        'cid'=>105,
        'name'=>'External Hard Disk',
        'desc'=>'Hard Disk storage device for external use',
        'created_at'=>'2021-05-30 13:49:27',
        'updated_at'=>'2021-06-03 04:50:57'
        ] );


        Item::create( [
        'id'=>101,
        'vid'=>101,
        'scid'=>108,
        'bid'=>101,
        'model'=>'14s-fr0016AU',
        'package'=>'Laptop, Power Adaptor, User Guide, Warranty Documents',
        'name'=>'Thin and Light Laptop  (14 inch, Natural Silver, 1.46 KG, With MS Office)',
        'size'=>'324 x 225 x 17.9 - 35.56 cm (14 Inches) screen',
        'color'=>'Natural Silver',
        'desc'=>'Stylish & Portable Thin and Light Laptop 14 Inches Full HD LED Backlit, IPS Micro-Edge BrightView (250 nits Brightness, 157 PPI, 45% NTSC Color Gamut) Light Laptop without Optical Disk Drive',
        'stock'=>'15',
        'sprice'=>'39490',
        'cprice'=>'35000',
        'image'=>'hp-14s-fr0009au-laptop-original-imafx3rhqwgwzwgy.jpeg',
        'created_at'=>'2021-05-30 22:34:22',
        'updated_at'=>'2021-06-30 16:38:10'
        ] );
        
        
                    
        Item::create( [
        'id'=>108,
        'vid'=>1013,
        'scid'=>106,
        'bid'=>106,
        'model'=>'ZEB-TRANSFORMER-M',
        'package'=>'1 X Mouse',
        'name'=>'Wired Optical Gaming Mouse',
        'size'=>'Medium',
        'color'=>'Black',
        'desc'=>'Zeb-Transformer-M is a premium gaming mouse that comes with 6 buttons. It has a high precision optical sensor with a dedicated DPI switch that can toggle between 1000/1600/ 2400/ 3200 DPI.',
        'stock'=>'19',
        'sprice'=>'519',
        'cprice'=>'480',
        'image'=>'zeb-transformer-m-zebronics-original-imafxrugfftphbkk.jpeg',
        'created_at'=>'2021-06-03 05:46:06',
        'updated_at'=>'2021-07-21 16:22:07'
        ] );
        
        
                    
        Item::create( [
        'id'=>109,
        'vid'=>101,
        'scid'=>101,
        'bid'=>101,
        'model'=>'LaserJet MFP M438dn',
        'package'=>'Printer, 2 set  Toner Cartridges',
        'name'=>'Multi-function Monochrome Laser Printer',
        'size'=>'Height 64 cm * Width 70 cm * Depth 70 cm',
        'color'=>'White',
        'desc'=>'Laser , Monochrome Output , USB , Ethernet',
        'stock'=>'3',
        'sprice'=>'62000',
        'cprice'=>'49999',
        'image'=>'laserjet-mfp-m438dn-hp-original-imagfajzqk9aava3.jpeg',
        'created_at'=>'2021-06-10 17:32:48',
        'updated_at'=>'2021-06-30 16:40:40'
        ] );
        
        
                    
        Item::create( [
        'id'=>1010,
        'vid'=>102,
        'scid'=>109,
        'bid'=>102,
        'model'=>'A715-75G-50TA/ A715-75G-41G',
        'package'=>'Laptop, Power Adaptor, User Guide, Warranty Documents',
        'name'=>'acer Aspire 7 Core i5 10th Gen',
        'size'=>'363.4 x 254.5 x 20.9  |  39.62 cm (15.6 inch) Screen size  |  1920 x 1080 Pixels',
        'color'=>'Black',
        'desc'=>'(8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650) A715-75G-50TA/ A715-75G-41G Gaming Laptop  (15.6 inch, Black, 2.15 Kg)',
        'stock'=>'9',
        'sprice'=>'59,990',
        'cprice'=>'55000',
        'image'=>'na-gaming-laptop-acer-original-imag3d63hk3h8nm2.jpeg',
        'created_at'=>'2021-07-21 11:29:22',
        'updated_at'=>'2021-07-21 16:06:08'
        ] );
    }
}
