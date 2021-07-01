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
       

        Category::create( [
            'id'=>1,
            'name'=>'Laptops',
            'desc'=>'Sleek, compact, powerful laptops give you all the advantages of a desktop computer with added mobility and more.',
            'image'=>'024-laptop.svg',
            'created_at'=>'2021-05-30 17:27:16',
            'updated_at'=>'2021-06-01 06:44:27'
        ] );
            
            

        Category::create( [
        'id'=>2,
        'name'=>'Desktops',
        'desc'=>'Desktop computers as the name suggests are those computers which require desk and space and that is the reason why they can be used at a single location only.',
        'image'=>'027-pc.svg',
        'created_at'=>'2021-05-30 17:29:40',
        'updated_at'=>'2021-06-01 06:46:42'
        ] );
        
        

        Category::create( [
        'id'=>3,
        'name'=>'Accessories',
        'desc'=>'They are every peripheral that you attach to your computer but they are not built-in within your device.',
        'image'=>'026-mouse.svg',
        'created_at'=>'2021-05-30 17:33:05',
        'updated_at'=>'2021-06-01 06:47:02'
        ] );
        
        

        Category::create( [
        'id'=>4,
        'name'=>'Peripherals',
        'desc'=>'A peripheral device is an internal or external device that connects directly to a computer but does not contribute to the computer\'s primary function, such as computing.',
        'image'=>'030-printer.svg',
        'created_at'=>'2021-05-30 17:39:21',
        'updated_at'=>'2021-06-01 06:47:35'
        ] );
        
        

        Category::create( [
        'id'=>5,
        'name'=>'Storage',
        'desc'=>'A storage device is any type of computing hardware that is used for storing, porting or extracting data files and objects.',
        'image'=>'018-harddisk.svg',
        'created_at'=>'2021-06-03 04:50:14',
        'updated_at'=>'2021-06-03 04:50:14'
        ] );
                
        Subcategory::create( [
            'id'=>1,
            'cid'=>4,
            'name'=>'Printers',
            'desc'=>'Peripheral for printing papers.',
            'created_at'=>'2021-05-30 13:31:16',
            'updated_at'=>'2021-06-03 04:46:30'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>2,
            'cid'=>4,
            'name'=>'Monitors',
            'desc'=>'Peripheral Displays',
            'created_at'=>'2021-05-30 13:31:46',
            'updated_at'=>'2021-06-03 04:46:42'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>3,
            'cid'=>4,
            'name'=>'Scanners',
            'desc'=>'Peripheral for scanning documents',
            'created_at'=>'2021-05-30 13:32:22',
            'updated_at'=>'2021-06-03 04:46:51'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>4,
            'cid'=>4,
            'name'=>'Projectors',
            'desc'=>'Projecting display',
            'created_at'=>'2021-05-30 13:33:16',
            'updated_at'=>'2021-06-03 04:46:59'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>5,
            'cid'=>3,
            'name'=>'Keyboards',
            'desc'=>'Keyboards in accessories',
            'created_at'=>'2021-05-30 13:34:32',
            'updated_at'=>'2021-06-03 04:47:10'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>6,
            'cid'=>3,
            'name'=>'Mouse',
            'desc'=>'Mouse in Accessories',
            'created_at'=>'2021-05-30 13:35:36',
            'updated_at'=>'2021-06-03 04:47:18'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>7,
            'cid'=>3,
            'name'=>'Other Accessories',
            'desc'=>'All other accessories',
            'created_at'=>'2021-05-30 13:36:07',
            'updated_at'=>'2021-06-03 04:47:27'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>8,
            'cid'=>1,
            'name'=>'General Purpose Laptops',
            'desc'=>'General purpose laptops with minimal specifications',
            'created_at'=>'2021-05-30 13:38:17',
            'updated_at'=>'2021-05-30 13:38:17'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>9,
            'cid'=>1,
            'name'=>'Gaming Laptops',
            'desc'=>'High Performance laptops for gaming purpose',
            'created_at'=>'2021-05-30 13:38:54',
            'updated_at'=>'2021-05-30 13:38:54'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>10,
            'cid'=>1,
            'name'=>'Business Laptops',
            'desc'=>'Business Purpose Special Laptops(Office use)',
            'created_at'=>'2021-05-30 13:41:05',
            'updated_at'=>'2021-05-30 13:41:05'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>11,
            'cid'=>1,
            'name'=>'Professional Laptops',
            'desc'=>'High Performance laptops for Professionals',
            'created_at'=>'2021-05-30 13:42:00',
            'updated_at'=>'2021-05-30 13:42:00'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>12,
            'cid'=>2,
            'name'=>'General Purpose Desktops',
            'desc'=>'General purpose Desktops with minimal specifications',
            'created_at'=>'2021-05-30 08:08:17',
            'updated_at'=>'2021-06-03 04:47:37'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>13,
            'cid'=>2,
            'name'=>'Gaming Desktops',
            'desc'=>'High Performance Desktops for gaming purpose',
            'created_at'=>'2021-05-30 08:08:54',
            'updated_at'=>'2021-06-03 04:47:50'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>14,
            'cid'=>2,
            'name'=>'Business Desktops',
            'desc'=>'Business Purpose Special Desktops(Office use)',
            'created_at'=>'2021-05-30 08:11:05',
            'updated_at'=>'2021-06-03 04:48:07'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>15,
            'cid'=>2,
            'name'=>'Professional Desktops',
            'desc'=>'High Performance Desktops for Professionals',
            'created_at'=>'2021-05-30 08:12:00',
            'updated_at'=>'2021-06-03 04:48:21'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>16,
            'cid'=>5,
            'name'=>'PenDrives',
            'desc'=>'Memory stick for storage',
            'created_at'=>'2021-05-30 13:47:16',
            'updated_at'=>'2021-06-03 04:50:32'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>17,
            'cid'=>5,
            'name'=>'Memory Card',
            'desc'=>'Data storage card',
            'created_at'=>'2021-05-30 13:48:05',
            'updated_at'=>'2021-06-03 04:50:40'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>18,
            'cid'=>5,
            'name'=>'Internal Hard Disks',
            'desc'=>'Hard Disk storage device for internal use',
            'created_at'=>'2021-05-30 13:48:50',
            'updated_at'=>'2021-06-03 04:50:49'
            ] );
            
            
                        
            Subcategory::create( [
            'id'=>19,
            'cid'=>5,
            'name'=>'External Hard Disk',
            'desc'=>'Hard Disk storage device for external use',
            'created_at'=>'2021-05-30 13:49:27',
            'updated_at'=>'2021-06-03 04:50:57'
            ] );    
            
            Vendor::create( [
                'id'=>1,
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
                'id'=>2,
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
                'id'=>3,
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
                'id'=>4,
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
                'id'=>5,
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
                'id'=>6,
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
                'id'=>7,
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
                'id'=>8,
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
                'id'=>9,
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
                'id'=>10,
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
                'id'=>11,
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
                'id'=>12,
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
                'id'=>13,
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
                'id'=>15,
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
                'id'=>16,
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
                'id'=>17,
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
                'id'=>18,
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
                'id'=>19,
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
                    'id'=>1,
                    'name'=>'HP',
                    'desc'=>'Hewlett-Packard  Information Technology Company',
                    'logo'=>'th.jpg',
                    'created_at'=>'2021-05-30 19:23:46',
                    'updated_at'=>'2021-05-30 19:23:46'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>2,
                    'name'=>'Acer',
                    'desc'=>'Acer  Corporation',
                    'logo'=>'th (1).jpg',
                    'created_at'=>'2021-05-30 19:24:30',
                    'updated_at'=>'2021-05-30 19:24:30'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>3,
                    'name'=>'Dell',
                    'desc'=>'Dell  Computer Technology Company',
                    'logo'=>'th (2).jpg',
                    'created_at'=>'2021-05-30 19:25:13',
                    'updated_at'=>'2021-05-30 19:25:13'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>4,
                    'name'=>'ASUS',
                    'desc'=>'ASUS  Electronics Company',
                    'logo'=>'th (3).jpg',
                    'created_at'=>'2021-05-30 19:26:26',
                    'updated_at'=>'2021-05-30 19:26:26'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>5,
                    'name'=>'Lenovo',
                    'desc'=>'Lenovo  Multinational Technology Company',
                    'logo'=>'th (4).jpg',
                    'created_at'=>'2021-05-30 19:27:12',
                    'updated_at'=>'2021-05-30 19:27:12'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>6,
                    'name'=>'Zebronics',
                    'desc'=>'Zebronics Organization',
                    'logo'=>'th (5).jpg',
                    'created_at'=>'2021-05-30 19:28:29',
                    'updated_at'=>'2021-05-30 19:28:29'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>7,
                    'name'=>'SanDisk',
                    'desc'=>'SanDisk  Corporation',
                    'logo'=>'th (6).jpg',
                    'created_at'=>'2021-05-30 19:29:44',
                    'updated_at'=>'2021-05-30 19:29:44'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>8,
                    'name'=>'Kingston',
                    'desc'=>'Kingston Technology Computer Technology Corporation',
                    'logo'=>'th (7).jpg',
                    'created_at'=>'2021-05-30 19:30:35',
                    'updated_at'=>'2021-05-30 19:30:35'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>9,
                    'name'=>'CORSAIR',
                    'desc'=>'CORSAIR  Company',
                    'logo'=>'th (8).jpg',
                    'created_at'=>'2021-05-30 19:31:15',
                    'updated_at'=>'2021-05-30 19:31:15'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>10,
                    'name'=>'Intel',
                    'desc'=>'Intel  Technology Company',
                    'logo'=>'th (9).jpg',
                    'created_at'=>'2021-05-30 19:31:57',
                    'updated_at'=>'2021-05-30 19:31:57'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>11,
                    'name'=>'Sony',
                    'desc'=>'Sony  Corporation',
                    'logo'=>'th (10).jpg',
                    'created_at'=>'2021-05-30 19:32:48',
                    'updated_at'=>'2021-05-30 19:32:48'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>12,
                    'name'=>'Toshiba',
                    'desc'=>'Toshiba  Japanese Multinational Conglomerate',
                    'logo'=>'th (11).jpg',
                    'created_at'=>'2021-05-30 19:33:31',
                    'updated_at'=>'2021-05-30 19:33:31'
                    ] );
                    
                    
                                
                    Brand::create( [
                    'id'=>13,
                    'name'=>'AMD',
                    'desc'=>'Advanced Micro Devices  Semiconductor Company',
                    'logo'=>'th (12).jpg',
                    'created_at'=>'2021-05-30 19:34:15',
                    'updated_at'=>'2021-05-30 19:34:15'
                    ] );
                    
                    Item::create( [
                        'id'=>1,
                        'vid'=>1,
                        'scid'=>8,
                        'bid'=>1,
                        'model'=>'14s-fr0016AU',
                        'package'=>'Laptop, Power Adaptor, User Guide, Warranty Documents',
                        'name'=>'Thin and Light Laptop  (14 inch, Natural Silver, 1.46 KG, With MS Office)',
                        'size'=>'324 x 225 x 17.9 - 35.56 cm (14 Inches) screen',
                        'color'=>'Natural Silver',
                        'desc'=>'Stylish & Portable Thin and Light Laptop 14 Inches Full HD LED Backlit, IPS Micro-Edge BrightView (250 nits Brightness, 157 PPI, 45% NTSC Color Gamut) Light Laptop without Optical Disk Drive',
                        'stock'=>'0',
                        'sprice'=>'39490',
                        'cprice'=>'35000',
                        'image'=>'hp-14s-fr0009au-laptop-original-imafx3rhqwgwzwgy.jpeg',
                        'created_at'=>'2021-05-30 22:34:22',
                        'updated_at'=>'2021-06-30 16:38:10'
                        ] );
                        
                        
                                    
                        Item::create( [
                        'id'=>8,
                        'vid'=>13,
                        'scid'=>6,
                        'bid'=>6,
                        'model'=>'ZEB-TRANSFORMER-M',
                        'package'=>'1 X Mouse',
                        'name'=>'Wired Optical Gaming Mouse',
                        'size'=>'Medium',
                        'color'=>'Black',
                        'desc'=>'Zeb-Transformer-M is a premium gaming mouse that comes with 6 buttons. It has a high precision optical sensor with a dedicated DPI switch that can toggle between 1000/1600/ 2400/ 3200 DPI.',
                        'stock'=>'0',
                        'sprice'=>'519',
                        'cprice'=>'480',
                        'image'=>'zeb-transformer-m-zebronics-original-imafxrugfftphbkk.jpeg',
                        'created_at'=>'2021-06-03 05:46:06',
                        'updated_at'=>'2021-06-03 07:32:01'
                        ] );
                        
                        
                                    
                        Item::create( [
                        'id'=>9,
                        'vid'=>1,
                        'scid'=>1,
                        'bid'=>1,
                        'model'=>'LaserJet MFP M438dn',
                        'package'=>'Printer, 2 set  Toner Cartridges',
                        'name'=>'Multi-function Monochrome Laser Printer',
                        'size'=>'Height 64 cm * Width 70 cm * Depth 70 cm',
                        'color'=>'White',
                        'desc'=>'Laser , Monochrome Output , USB , Ethernet',
                        'stock'=>'0',
                        'sprice'=>'62000',
                        'cprice'=>'49999',
                        'image'=>'laserjet-mfp-m438dn-hp-original-imagfajzqk9aava3.jpeg',
                        'created_at'=>'2021-06-10 17:32:48',
                        'updated_at'=>'2021-06-30 16:40:40'
                        ] );            
    }
}
