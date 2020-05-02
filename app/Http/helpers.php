<?php
function images_news($id,$alt,$class)
{
    $fetch_userTo = DB::table('beritas')
    ->where('gambar', $id)
    ->get();

    $count = $fetch_userTo->count();
    if($count!=0){
        $thumb_pic = $fetch_userTo[0]->name;
        $photos_path = public_path('/images/berita/'.$id.'/');
        $photos_path_return ='/images/berita/'.$id.'/';
        if (file_exists( $photos_path . $thumb_pic)) {
            return "<img src=\"".$photos_path_return. $thumb_pic."\" class=\"".$class."\" alt=\"".$alt."\" >";
        }else{
            return '';
        }
    }else{
        return '';
    }
}