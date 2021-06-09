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
        Morder::create( [
            'id'=>13,
            'cid'=>3,
            'status'=>'oncart',
            'created_at'=>'2021-06-03 20:19:14',
            'updated_at'=>'2021-06-03 20:19:14'
            ] );
            
            
                        
            Morder::create( [
            'id'=>14,
            'cid'=>2,
            'status'=>'oncart',
            'created_at'=>'2021-06-04 16:18:16',
            'updated_at'=>'2021-06-04 16:18:16'
            ] );
            
            
                        
            Morder::create( [
            'id'=>15,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 03:30:50',
            'updated_at'=>'2021-06-08 03:30:50'
            ] );
            
            
                        
            Morder::create( [
            'id'=>16,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 03:31:03',
            'updated_at'=>'2021-06-08 03:31:03'
            ] );
            
            
                        
            Morder::create( [
            'id'=>17,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 03:31:26',
            'updated_at'=>'2021-06-08 03:31:26'
            ] );
            
            
                        
            Morder::create( [
            'id'=>18,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 03:39:49',
            'updated_at'=>'2021-06-08 03:39:49'
            ] );
            
            
                        
            Morder::create( [
            'id'=>19,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 05:16:40',
            'updated_at'=>'2021-06-08 05:16:40'
            ] );
            
            
                        
            Morder::create( [
            'id'=>20,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 05:18:34',
            'updated_at'=>'2021-06-08 05:18:34'
            ] );
            
            
                        
            Morder::create( [
            'id'=>21,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 05:42:38',
            'updated_at'=>'2021-06-08 05:42:38'
            ] );
            
            
                        
            Morder::create( [
            'id'=>22,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 05:43:05',
            'updated_at'=>'2021-06-08 05:43:05'
            ] );
            
            
                        
            Morder::create( [
            'id'=>23,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 05:44:15',
            'updated_at'=>'2021-06-08 05:44:15'
            ] );
            
            
                        
            Morder::create( [
            'id'=>24,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 05:45:13',
            'updated_at'=>'2021-06-08 05:45:13'
            ] );
            
            
                        
            Morder::create( [
            'id'=>25,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 05:53:54',
            'updated_at'=>'2021-06-08 05:53:54'
            ] );
            
            
                        
            Morder::create( [
            'id'=>26,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:33:26',
            'updated_at'=>'2021-06-08 14:33:26'
            ] );
            
            
                        
            Morder::create( [
            'id'=>27,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:34:16',
            'updated_at'=>'2021-06-08 14:34:16'
            ] );
            
            
                        
            Morder::create( [
            'id'=>28,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:35:25',
            'updated_at'=>'2021-06-08 14:35:25'
            ] );
            
            
                        
            Morder::create( [
            'id'=>29,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:36:05',
            'updated_at'=>'2021-06-08 14:36:05'
            ] );
            
            
                        
            Morder::create( [
            'id'=>30,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:37:28',
            'updated_at'=>'2021-06-08 14:37:28'
            ] );
            
            
                        
            Morder::create( [
            'id'=>31,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:37:57',
            'updated_at'=>'2021-06-08 14:37:57'
            ] );
            
            
                        
            Morder::create( [
            'id'=>32,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:38:20',
            'updated_at'=>'2021-06-08 14:38:20'
            ] );
            
            
                        
            Morder::create( [
            'id'=>33,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:39:15',
            'updated_at'=>'2021-06-08 14:39:15'
            ] );
            
            
                        
            Morder::create( [
            'id'=>34,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:39:53',
            'updated_at'=>'2021-06-08 14:39:53'
            ] );
            
            
                        
            Morder::create( [
            'id'=>35,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:41:06',
            'updated_at'=>'2021-06-08 14:41:06'
            ] );
            
            
                        
            Morder::create( [
            'id'=>36,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:41:31',
            'updated_at'=>'2021-06-08 14:41:31'
            ] );
            
            
                        
            Morder::create( [
            'id'=>37,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 14:42:30',
            'updated_at'=>'2021-06-08 14:42:30'
            ] );
            
            
                        
            Morder::create( [
            'id'=>38,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 15:32:03',
            'updated_at'=>'2021-06-08 15:32:03'
            ] );
            
            
                        
            Morder::create( [
            'id'=>39,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 15:32:57',
            'updated_at'=>'2021-06-08 15:32:57'
            ] );
            
            
                        
            Morder::create( [
            'id'=>40,
            'cid'=>2,
            'status'=>'buynow',
            'created_at'=>'2021-06-08 16:26:02',
            'updated_at'=>'2021-06-08 16:26:02'
            ] );
    }
}
