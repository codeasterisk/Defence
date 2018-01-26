<?php
/**
 * Users Accounts roles
 * @return array
 */
function roles()
{
  $array=[
      '1'=>'مدير الموقع',
      '2'=>'محرر الموقع',
  ];
  return $array;
}
/**
 * Users Accounts permissions
 * @return array
 */
function permissions()
{
    $array=[
        'control videos'=>'يستطيع التحكم بالفيديوهات',
        'control images'=>'يستطيع التحكم بالصور',
    ];
    return $array;
}

/**
 * Status of the Users & News
 * @return array
 */
function status()
{
  $array=[
    'غير مفعل',
'مفعل'
  ];
  return $array;
}


/**
 * Type of the Category
 * @return array
 */
function cat_type()
{
    $array=[
        'news'=>'قسم أخباري',
        'infographic'=>'قسم أنفوجرافيك',
        'video'=>'قسم للفيديوهات',
    ];
    return $array;
}

/**
 * Upload Path
 * @return string
 */
function uploadpath()
{
    return '/public/upload/';
}

/**
 * Upload an image
 * @param $img
 */
function uploader($request,$img_name)
{
    $filename = rand(99999, 999999999999) . $request->file($img_name)->getClientOriginalName();
    $request->file($img_name)->move(base_path().uploadpath(), $filename);
    $profileimg  = $filename;
    return $profileimg;
}

/**
 * Get Image
 * @param $filename
 * @return string
 */
function getimg($filename)
{
    return '/upload/'.$filename;
}

/**
 * Make a slug
 * @param $string
 * @return mixed
 */
function make_slug($string = null, $separator = "-") {
    if (is_null($string)) {
        return "";
    }

    // Remove spaces from the beginning and from the end of the string
    $string = trim($string);

    // Lower case everything
    // using mb_strtolower() function is important for non-Latin UTF-8 string | more info: http://goo.gl/QL2tzK
    $string = mb_strtolower($string, "UTF-8");;

    // Make alphanumeric (removes all other characters)
    // this makes the string safe especially when used as a part of a URL
    // this keeps latin characters and arabic charactrs as well
    $string = preg_replace("/[^a-z0-9_\s-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]/u", "", $string);

    // Remove multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);

    // Convert whitespaces and underscore to the given separator
    $string = preg_replace("/[\s_]/", $separator, $string);

    return $string . '-' . time();
}
