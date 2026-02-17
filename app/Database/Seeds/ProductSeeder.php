<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [

            [
                'collection_id' => 1,
                'name' => 'Astra Diamond Choker',
                'slug' => 'astra-diamond-choker',
                'price' => 32400,
                'material' => '18k White Gold',
                'description' => 'Luxury diamond choker',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCn1QKCpcE1NfKR3dvvYcclozLO29QRZET5ecKCwtAmHzr9O48is6LpVuFlm2SqfN_JjHpUIKIbD8twZkhZeBeMkzgLj25f0zDE7qV570kPD-3ZJrs0u0v5jUQNsI9f2dCp04ewGVu-zCM9nedwdA2pcgO2SZuALukoomA_IIDQWHnkVllCEGPolFpu__O-YBEWlrOyJ3rXTye831gGhNsCUQiJVTLtlD4v0spkMbUbb2ztajVYZ7Ea6bzMv72Zdb8QWqDla3EMmqo'
            ],

            [
                'collection_id' => 2,
                'name' => 'Verdant Muse Ring',
                'slug' => 'verdant-muse-ring',
                'price' => 18900,
                'material' => '18k Yellow Gold',
                'description' => 'Emerald vintage ring',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDOUwM8a7-jhhrQ-_Vvk6Gumad2C3o1daZKjTgTHly8Mat8X7eWDHwuoZSr0caGKXiW6YfvFV6Y9VX950qGgRktb0Wtsh5vD9fAGS31MVRCscv7c6k7x6aoiL8mCJQc97XSymUqkxMeXKZfjqxIV4T6NYKlMX4l0tO4lV4HcrqW0AvmkCV3PAp46GdYZEq3wkpG7lBGeiEXUPHxcL6u3Ni5KFQOTJ4TFH8TbhI5mAwd08jbTfvXWq8zqXFnoUEOO_CHpJCvbenWfak'
            ],

            [
                'collection_id' => 3,
                'name' => 'Eternal Aurelian Cuff',
                'slug' => 'eternal-aurelian-cuff',
                'price' => 8250,
                'material' => '22k Solid Gold',
                'description' => 'Solid gold luxury bracelet',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA0N4ZSssGKxpzD4WvGtzPWwMNaCRXyXrq9tiSIeSJx08gQnaUD51tH-jdixdoe-bT3ogB43Va5CScMXVMZAytKN_0_sLVdnxd-fGyQ_vxwk1krJ3qA2PF19teFSov8uPq9WYP-e0tmLWqZS3Iy_WknnFrh4qwy8Kq9nVw-TttIJy4FThSbaz8RCgfDYsRpG3abctyRP3I5o1mwNeUhdW9h84tWhkB1nJUfuPYleGb8FsXmRzC6MZHDS8EPa7lIVUomnzEU4v1Eh7Y'
            ],

            [
                'collection_id' => 4,
                'name' => 'Cascade Diamond Drops',
                'slug' => 'cascade-diamond-drops',
                'price' => 12400,
                'material' => 'Platinum',
                'description' => 'Diamond drop earrings',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCtlwNfo0d6IV14IdmkT5A8TrTbGmh0JIb0NkszB9K23vkV5x1XnFlSnCDkeM_YiNyHAYgONhDZ0rAr8OYzpZOAwu5mxSJtIWhx1qVraSAznoYNFRwWaVPEmwJFWZYwP9Wl0WUxY6dwpAvZ_n-l45dX3Ss3pIxTbP1rqhwRWpfA9aydkQGNRqvqxW457quarShMzPlVqQ_pd8KEVXvWkwsNuurmNda9KzwXOH7iFiypqtwM0XIsiBAyF60NRO8zQ7WV1gZmSPJGFwU'
            ],

            [
                'collection_id' => 5,
                'name' => 'Midnight Star Pendant',
                'slug' => 'midnight-star-pendant',
                'price' => 15600,
                'material' => '18k White Gold',
                'description' => 'Blue sapphire pendant necklace',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBtFSw0EPTmjs5ftW1q0jo0qGLRLhq7g4CHXzqTDVRoOa06-dDLJzUKHWS9B0HsC5sYeoKUafdER7jXna-GSsriqYV4f3clFNd2Wu-0CINs4pWvx2DyDwg1tt639Pk6GjD1QXeiL4NLHUMW0YdG6DaUDR6lTSXQ1_C9oAmoeTCwVtgNy7CFAuJCZmN2Ixu9FOoZpHi1CywQBGrlWNPsXwSZNfkIwibPp7rIMP5-RBVB62cPq-vGjSV1bLfYLZJdhsFv8F6CuSNPl3o'
            ],

            [
                'collection_id' => 1,
                'name' => 'Seraphina Rose Link',
                'slug' => 'seraphina-rose-link',
                'price' => 6450,
                'material' => '18k Rose Gold',
                'description' => 'Rose gold diamond bracelet',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDow6bj6tfsJ-pHFxGhOffUjd-X1Ozz8M72nTyRZKMiS6vfSK78a2sE6jmjA4PJDjoGq4t6ydoMSH4xybQwGeEYisDY0-jXDCg1Ky5WZoMGhatw36w5AoFAu7LCKPAE4Nsm3h5lWA9aAmBcKtoB196QEb4bwMT0sktrgLwIJX9R_61GCsXtbIufULEIpEdS4wzZ-T21HHGTFlF0OzosQ8ITt71dZUh6zU534Gv0kt6kZGUL-Kv5OMHRC7J78jo0g-hmFToK-PkYO88'
            ],

        ];

        $this->db->table('products')->insertBatch($data);
    }
}