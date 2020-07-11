<?php

use Illuminate\Database\Seeder;

class quangcao extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('quangcao')->insert(array(
           array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img1.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
           array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img2.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
           array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img3.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
           array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img4.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
            array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img5.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
            array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img6.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
           array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img7.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
           array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img8.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
           array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img9.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
           array('maloaiquangcao'=>'1','tenquangcao'=>'slide','lienket'=>'slide_img10.jpg','thutu'=>'1','ngaydang'=>Carbon::now()->format('Y-m-d')),
       ));
    }
}
