<?php


namespace App\classes;


class News
{
    public $newsId;
    public $news =  [];
    public function __construct($id = null, $post=null)
    {
        if ($id)
        {
            $this->newsId = $id;
        }
    }

    public function allNews ()
    {
        $this->news = [
            0 => [
                'id'        => 1,
                'category_id'   => 1,
                'title'      => 'মাছের টুকরা ছোট হয়েছে, ডাল হয়েছে আরও পাতলা',
                'author_name' => 'Alif Khan',
                'image'     => '1.webp',
                'short_description' => 'নলা মাছ, বেগুন ও আলুর তরকারি। সঙ্গে ডাল।',
                'long_description'  => 'এগুলো রাজধানীর হাতিরঝিল থানার মিরবাগে ইউনুস মিয়ার রিকশার গ্যারেজের গতকাল মঙ্গলবার দুপুরের খাবারের পদ। বেলা দুইটার দিকে গিয়ে দেখা গেল, ৩০ জনের মতো রিকশাচালক খাচ্ছেন। কেউ কেউ অপেক্ষায়। খাবারের থালার দিকে তাকিয়ে দেখা যায়, মাছের টুকরাটি একেবারেই ছোট। ডালও পানির মতো পাতলা। রিকশাচালক শাকিল আহমেদ তখন দুপুরের খাবার খেতে এসেছেন। তিনি প্রথম আলোকে জানান, গ্যারেজে দুই বেলা খেতে এখন ১১০ টাকা লাগে। দু-এক মাসে খাবারের দাম বাড়েনি। তবে মাছ অথবা মাংসের টুকরা ছোট হয়েছে। আগে দুই বেলাই মাছ অথবা মাংস থাকত। এখন রাতে আলুভর্তা ও ডাল দেওয়া হয়। তিনি বলেন, মসুরের বদলে এখন রান্না করা হয় অ্যাংকর ডাল। এই ডাল আরও পাতলা হয়েছে। ঢাকায় এই রিকশার গ্যারেজের মতো ছোট চাকরিজীবীদের মেস, ছাত্রদের যৌথ খাবার ব্যবস্থা এবং চাকরিজীবীদের জন্য টিফিন বক্সে খাবার সরবরাহের ক্ষেত্রে কোথাও দাম বেড়েছে, কোথাও দাম না বাড়িয়ে মাছ-মাংসের টুকরা ছোট করা হয়েছে। সব মিলিয়ে খাবারের মানে ছাড় দিয়ে খরচ পোষানো হচ্ছে।'
            ],
            1 => [
                'id'        => 2,
                'category_id'   => 1,
                'title'      => 'সহপাঠীকে আগ্নেয়াস্ত্রের ছবি পাঠান বন্দুকধারী',
                'author_name' => 'Khondokar Sadiya',
                'image'     => '2.webp',
                'short_description' => 'নলা মাছ, বেগুন ও আলুর তরকারি। সঙ্গে ডাল।',
                'long_description'  => 'এগুলো রাজধানীর হাতিরঝিল থানার মিরবাগে ইউনুস মিয়ার রিকশার গ্যারেজের গতকাল মঙ্গলবার দুপুরের খাবারের পদ। বেলা দুইটার দিকে গিয়ে দেখা গেল, ৩০ জনের মতো রিকশাচালক খাচ্ছেন। কেউ কেউ অপেক্ষায়। খাবারের থালার দিকে তাকিয়ে দেখা যায়, মাছের টুকরাটি একেবারেই ছোট। ডালও পানির মতো পাতলা। রিকশাচালক শাকিল আহমেদ তখন দুপুরের খাবার খেতে এসেছেন। তিনি প্রথম আলোকে জানান, গ্যারেজে দুই বেলা খেতে এখন ১১০ টাকা লাগে। দু-এক মাসে খাবারের দাম বাড়েনি। তবে মাছ অথবা মাংসের টুকরা ছোট হয়েছে। আগে দুই বেলাই মাছ অথবা মাংস থাকত। এখন রাতে আলুভর্তা ও ডাল দেওয়া হয়। তিনি বলেন, মসুরের বদলে এখন রান্না করা হয় অ্যাংকর ডাল। এই ডাল আরও পাতলা হয়েছে। ঢাকায় এই রিকশার গ্যারেজের মতো ছোট চাকরিজীবীদের মেস, ছাত্রদের যৌথ খাবার ব্যবস্থা এবং চাকরিজীবীদের জন্য টিফিন বক্সে খাবার সরবরাহের ক্ষেত্রে কোথাও দাম বেড়েছে, কোথাও দাম না বাড়িয়ে মাছ-মাংসের টুকরা ছোট করা হয়েছে। সব মিলিয়ে খাবারের মানে ছাড় দিয়ে খরচ পোষানো হচ্ছে।'
            ],
            2 => [
                'id'        => 3,
                'category_id'   => 2,
                'title'      => 'ইরাক যুদ্ধের বদলা নিতে বুশকে হত্যার ষড়যন্ত্র',
                'author_name' => 'CR',
                'image'     => '3.webp',
                'short_description' => 'নলা মাছ, বেগুন ও আলুর তরকারি। সঙ্গে ডাল।',
                'long_description'  => 'এগুলো রাজধানীর হাতিরঝিল থানার মিরবাগে ইউনুস মিয়ার রিকশার গ্যারেজের গতকাল মঙ্গলবার দুপুরের খাবারের পদ। বেলা দুইটার দিকে গিয়ে দেখা গেল, ৩০ জনের মতো রিকশাচালক খাচ্ছেন। কেউ কেউ অপেক্ষায়। খাবারের থালার দিকে তাকিয়ে দেখা যায়, মাছের টুকরাটি একেবারেই ছোট। ডালও পানির মতো পাতলা। রিকশাচালক শাকিল আহমেদ তখন দুপুরের খাবার খেতে এসেছেন। তিনি প্রথম আলোকে জানান, গ্যারেজে দুই বেলা খেতে এখন ১১০ টাকা লাগে। দু-এক মাসে খাবারের দাম বাড়েনি। তবে মাছ অথবা মাংসের টুকরা ছোট হয়েছে। আগে দুই বেলাই মাছ অথবা মাংস থাকত। এখন রাতে আলুভর্তা ও ডাল দেওয়া হয়। তিনি বলেন, মসুরের বদলে এখন রান্না করা হয় অ্যাংকর ডাল। এই ডাল আরও পাতলা হয়েছে। ঢাকায় এই রিকশার গ্যারেজের মতো ছোট চাকরিজীবীদের মেস, ছাত্রদের যৌথ খাবার ব্যবস্থা এবং চাকরিজীবীদের জন্য টিফিন বক্সে খাবার সরবরাহের ক্ষেত্রে কোথাও দাম বেড়েছে, কোথাও দাম না বাড়িয়ে মাছ-মাংসের টুকরা ছোট করা হয়েছে। সব মিলিয়ে খাবারের মানে ছাড় দিয়ে খরচ পোষানো হচ্ছে।'
            ],
            3 => [
                'id'        => 4,
                'category_id'   => 3,
                'title'      => 'বানভাসি মানুষের দুর্ভোগ',
                'author_name' => 'Nur Jahan',
                'image'     => '4.webp',
                'short_description' => 'নলা মাছ, বেগুন ও আলুর তরকারি। সঙ্গে ডাল।',
                'long_description'  => 'এগুলো রাজধানীর হাতিরঝিল থানার মিরবাগে ইউনুস মিয়ার রিকশার গ্যারেজের গতকাল মঙ্গলবার দুপুরের খাবারের পদ। বেলা দুইটার দিকে গিয়ে দেখা গেল, ৩০ জনের মতো রিকশাচালক খাচ্ছেন। কেউ কেউ অপেক্ষায়। খাবারের থালার দিকে তাকিয়ে দেখা যায়, মাছের টুকরাটি একেবারেই ছোট। ডালও পানির মতো পাতলা। রিকশাচালক শাকিল আহমেদ তখন দুপুরের খাবার খেতে এসেছেন। তিনি প্রথম আলোকে জানান, গ্যারেজে দুই বেলা খেতে এখন ১১০ টাকা লাগে। দু-এক মাসে খাবারের দাম বাড়েনি। তবে মাছ অথবা মাংসের টুকরা ছোট হয়েছে। আগে দুই বেলাই মাছ অথবা মাংস থাকত। এখন রাতে আলুভর্তা ও ডাল দেওয়া হয়। তিনি বলেন, মসুরের বদলে এখন রান্না করা হয় অ্যাংকর ডাল। এই ডাল আরও পাতলা হয়েছে। ঢাকায় এই রিকশার গ্যারেজের মতো ছোট চাকরিজীবীদের মেস, ছাত্রদের যৌথ খাবার ব্যবস্থা এবং চাকরিজীবীদের জন্য টিফিন বক্সে খাবার সরবরাহের ক্ষেত্রে কোথাও দাম বেড়েছে, কোথাও দাম না বাড়িয়ে মাছ-মাংসের টুকরা ছোট করা হয়েছে। সব মিলিয়ে খাবারের মানে ছাড় দিয়ে খরচ পোষানো হচ্ছে।'
            ],
            4 => [
                'id'        => 5,
                'category_id'   => 2,
                'title'      => 'জাতীয় ফিজিক্স অলিম্পিয়াড',
                'author_name' => 'Samim Rahman',
                'image'     => '5.webp',
                'short_description' => 'নলা মাছ, বেগুন ও আলুর তরকারি। সঙ্গে ডাল।',
                'long_description'  => 'এগুলো রাজধানীর হাতিরঝিল থানার মিরবাগে ইউনুস মিয়ার রিকশার গ্যারেজের গতকাল মঙ্গলবার দুপুরের খাবারের পদ। বেলা দুইটার দিকে গিয়ে দেখা গেল, ৩০ জনের মতো রিকশাচালক খাচ্ছেন। কেউ কেউ অপেক্ষায়। খাবারের থালার দিকে তাকিয়ে দেখা যায়, মাছের টুকরাটি একেবারেই ছোট। ডালও পানির মতো পাতলা। রিকশাচালক শাকিল আহমেদ তখন দুপুরের খাবার খেতে এসেছেন। তিনি প্রথম আলোকে জানান, গ্যারেজে দুই বেলা খেতে এখন ১১০ টাকা লাগে। দু-এক মাসে খাবারের দাম বাড়েনি। তবে মাছ অথবা মাংসের টুকরা ছোট হয়েছে। আগে দুই বেলাই মাছ অথবা মাংস থাকত। এখন রাতে আলুভর্তা ও ডাল দেওয়া হয়। তিনি বলেন, মসুরের বদলে এখন রান্না করা হয় অ্যাংকর ডাল। এই ডাল আরও পাতলা হয়েছে। ঢাকায় এই রিকশার গ্যারেজের মতো ছোট চাকরিজীবীদের মেস, ছাত্রদের যৌথ খাবার ব্যবস্থা এবং চাকরিজীবীদের জন্য টিফিন বক্সে খাবার সরবরাহের ক্ষেত্রে কোথাও দাম বেড়েছে, কোথাও দাম না বাড়িয়ে মাছ-মাংসের টুকরা ছোট করা হয়েছে। সব মিলিয়ে খাবারের মানে ছাড় দিয়ে খরচ পোষানো হচ্ছে।'
            ],
            5 => [
                'id'        => 6,
                'category_id'   => 2,
                'title'      => 'দুবাইভ্রমণে অস্থির দিরহাম, হজের কারণে রিয়াল',
                'author_name' => 'Lenin',
                'image'     => '6.webp',
                'short_description' => 'নলা মাছ, বেগুন ও আলুর তরকারি। সঙ্গে ডাল।',
                'long_description'  => 'এগুলো রাজধানীর হাতিরঝিল থানার মিরবাগে ইউনুস মিয়ার রিকশার গ্যারেজের গতকাল মঙ্গলবার দুপুরের খাবারের পদ। বেলা দুইটার দিকে গিয়ে দেখা গেল, ৩০ জনের মতো রিকশাচালক খাচ্ছেন। কেউ কেউ অপেক্ষায়। খাবারের থালার দিকে তাকিয়ে দেখা যায়, মাছের টুকরাটি একেবারেই ছোট। ডালও পানির মতো পাতলা। রিকশাচালক শাকিল আহমেদ তখন দুপুরের খাবার খেতে এসেছেন। তিনি প্রথম আলোকে জানান, গ্যারেজে দুই বেলা খেতে এখন ১১০ টাকা লাগে। দু-এক মাসে খাবারের দাম বাড়েনি। তবে মাছ অথবা মাংসের টুকরা ছোট হয়েছে। আগে দুই বেলাই মাছ অথবা মাংস থাকত। এখন রাতে আলুভর্তা ও ডাল দেওয়া হয়। তিনি বলেন, মসুরের বদলে এখন রান্না করা হয় অ্যাংকর ডাল। এই ডাল আরও পাতলা হয়েছে। ঢাকায় এই রিকশার গ্যারেজের মতো ছোট চাকরিজীবীদের মেস, ছাত্রদের যৌথ খাবার ব্যবস্থা এবং চাকরিজীবীদের জন্য টিফিন বক্সে খাবার সরবরাহের ক্ষেত্রে কোথাও দাম বেড়েছে, কোথাও দাম না বাড়িয়ে মাছ-মাংসের টুকরা ছোট করা হয়েছে। সব মিলিয়ে খাবারের মানে ছাড় দিয়ে খরচ পোষানো হচ্ছে।'
            ],
            6 => [
                'id'        => 7,
                'category_id'   => 4,
                'title'      => 'ব্যাংকারদের বিদেশ ভ্রমণ বন্ধ',
                'author_name' => 'Alif Khan',
                'image'     => '7.webp',
                'short_description' => 'নলা মাছ, বেগুন ও আলুর তরকারি। সঙ্গে ডাল।',
                'long_description'  => 'এগুলো রাজধানীর হাতিরঝিল থানার মিরবাগে ইউনুস মিয়ার রিকশার গ্যারেজের গতকাল মঙ্গলবার দুপুরের খাবারের পদ। বেলা দুইটার দিকে গিয়ে দেখা গেল, ৩০ জনের মতো রিকশাচালক খাচ্ছেন। কেউ কেউ অপেক্ষায়। খাবারের থালার দিকে তাকিয়ে দেখা যায়, মাছের টুকরাটি একেবারেই ছোট। ডালও পানির মতো পাতলা। রিকশাচালক শাকিল আহমেদ তখন দুপুরের খাবার খেতে এসেছেন। তিনি প্রথম আলোকে জানান, গ্যারেজে দুই বেলা খেতে এখন ১১০ টাকা লাগে। দু-এক মাসে খাবারের দাম বাড়েনি। তবে মাছ অথবা মাংসের টুকরা ছোট হয়েছে। আগে দুই বেলাই মাছ অথবা মাংস থাকত। এখন রাতে আলুভর্তা ও ডাল দেওয়া হয়। তিনি বলেন, মসুরের বদলে এখন রান্না করা হয় অ্যাংকর ডাল। এই ডাল আরও পাতলা হয়েছে। ঢাকায় এই রিকশার গ্যারেজের মতো ছোট চাকরিজীবীদের মেস, ছাত্রদের যৌথ খাবার ব্যবস্থা এবং চাকরিজীবীদের জন্য টিফিন বক্সে খাবার সরবরাহের ক্ষেত্রে কোথাও দাম বেড়েছে, কোথাও দাম না বাড়িয়ে মাছ-মাংসের টুকরা ছোট করা হয়েছে। সব মিলিয়ে খাবারের মানে ছাড় দিয়ে খরচ পোষানো হচ্ছে।'
            ],
            7 => [
                'id'        => 8,
                'category_id'   => 1,
                'title'      => 'মাইকের ব্যবসায় নেমে আসা নীরবতা',
                'author_name' => 'Ferdous',
                'image'     => '8.webp',
                'short_description' => 'নলা মাছ, বেগুন ও আলুর তরকারি। সঙ্গে ডাল।',
                'long_description'  => 'এগুলো রাজধানীর হাতিরঝিল থানার মিরবাগে ইউনুস মিয়ার রিকশার গ্যারেজের গতকাল মঙ্গলবার দুপুরের খাবারের পদ। বেলা দুইটার দিকে গিয়ে দেখা গেল, ৩০ জনের মতো রিকশাচালক খাচ্ছেন। কেউ কেউ অপেক্ষায়। খাবারের থালার দিকে তাকিয়ে দেখা যায়, মাছের টুকরাটি একেবারেই ছোট। ডালও পানির মতো পাতলা। রিকশাচালক শাকিল আহমেদ তখন দুপুরের খাবার খেতে এসেছেন। তিনি প্রথম আলোকে জানান, গ্যারেজে দুই বেলা খেতে এখন ১১০ টাকা লাগে। দু-এক মাসে খাবারের দাম বাড়েনি। তবে মাছ অথবা মাংসের টুকরা ছোট হয়েছে। আগে দুই বেলাই মাছ অথবা মাংস থাকত। এখন রাতে আলুভর্তা ও ডাল দেওয়া হয়। তিনি বলেন, মসুরের বদলে এখন রান্না করা হয় অ্যাংকর ডাল। এই ডাল আরও পাতলা হয়েছে। ঢাকায় এই রিকশার গ্যারেজের মতো ছোট চাকরিজীবীদের মেস, ছাত্রদের যৌথ খাবার ব্যবস্থা এবং চাকরিজীবীদের জন্য টিফিন বক্সে খাবার সরবরাহের ক্ষেত্রে কোথাও দাম বেড়েছে, কোথাও দাম না বাড়িয়ে মাছ-মাংসের টুকরা ছোট করা হয়েছে। সব মিলিয়ে খাবারের মানে ছাড় দিয়ে খরচ পোষানো হচ্ছে।'
            ],
        ];
        return $this->news;
    }
    public function getDetails ()
    {
        $this->news = $this->allNews();
        foreach ($this->news as $news)
        {
            if ($news['id'] == $this->newsId)
            {
                return $news;
            }
        }
    }
}