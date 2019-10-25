<?php

use Illuminate\Database\Seeder;

class DressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('dresses')->insert([
           'name' => 'Robe Longue Multiposition Robe Africaine Floral Multicolore sans Bretelles',
           'description' => ' Cotton, Polyester .',
           'photo' => '/storage/female-cloths/robe1.jpg',
           'price' => 18.89,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/EMILYLE-Multiposition-Portefeuille-Africaine-Multicolore/dp/B07V7SS5NQ/ref=pd_sbs_193_img_2/257-7924672-5292616?_encoding=UTF8&pd_rd_i=B07V7SS5NQ&pd_rd_r=99b1970a-0fb9-4075-a36e-829b0cb8a5da&pd_rd_w=mJUjV&pd_rd_wg=e6h2y&pf_rd_p=9b28d941-c13a-4c2b-b935-36854aa20020&pf_rd_r=VYWY954D18G7KHYJSZ9P&refRID=VYWY954D18G7KHYJSZ9P', 
            'stock' => 7,
            'size' => "",
            'photo2' => "",
            'photo3' => "",
            'photo4' => ""
      ]);

          DB::table('dresses')->insert([
           'name' => 'Robe Courte à Motif Floral Multicolore Boho Africain Robe de Soirée ',
           'description' => ' Cotton, Polyester .',
           'photo' => '/storage/female-cloths/robe2.jpg',
           'price' => 16.89,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/EMILYLE-Trap%C3%A8ze-Multicolore-Africain-Cocktail/dp/B07TJFGQFP',
            'stock' => 7,
            'size' => "",
            'photo2' => '/storage/female-cloths/robe2_photo2.jpg',
            'photo3' => '/storage/female-cloths/robe2_photo3.jpg',
            'photo4' => ""
        ]);

            DB::table('dresses')->insert([
           'name' => 'Robe imprimée Vintage de Soirée Rockabilly Cocktail Party Dress Grande Taille ',
           'description' => ' Cotton 95% Spandex 5%, sans_manches.',
           'photo' => '/storage/female-cloths/robe3.jpg',
           'price' => 20.72,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/dp/B07GWN8RYB/ref=sspa_dk_detail_2?psc=1&pd_rd_i=B07GWN8RYB&pd_rd_w=QiGEW&pf_rd_p=42b0c882-2f60-488f-b868-d46b19aecf92&pd_rd_wg=FMJrf&pf_rd_r=N393Y2P7XY5PPNEWA1JF&pd_rd_r=fd82c6e5-4859-4815-95fb-26e192c2dc54&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFFVkFWNlVOMEIzVUQmZW5jcnlwdGVkSWQ9QTAxNzg5NjExM0VJQkI0T0IxM1JEJmVuY3J5cHRlZEFkSWQ9QTAxOTE4MTUySDRKUVJRN1dPMUVOJndpZGdldE5hbWU9c3BfZGV0YWlsJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ==', 
            'stock' => 7,
            'size' => "",
            'photo2' => "",
            'photo3' => "",
            'photo4' => ""
        ]);

              DB::table('dresses')->insert([
           'name' => "Dashiki robe Ethnique Traditionnelle pour Soirée Cocktail Demoiselle d'honneur Prom Fête ",
           'description' => 'ROBE MULTI-STYLE: Femme elegante convertibles multi-way wrap bandage robe. Sans manches, imprimée avec des motifs 3D de Bohême.',
           'photo' => '/storage/female-cloths/robe4.jpg',
           'price' => 13.95,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/OBEEII-Africaine-Multi-Way-Traditionnel-Demoiselle/dp/B07PQCTVN5/ref=pd_sbs_193_1/257-7924672-5292616?_encoding=UTF8&pd_rd_i=B07PQCTVN5&pd_rd_r=cdc7ff41-b2a2-4dbd-a9f3-4fd52bec8b93&pd_rd_w=Xz08E&pd_rd_wg=uCmEp&pf_rd_p=26d54ac2-ee81-4c62-8302-1e18ced12245&pf_rd_r=NHDYX8AJ5HRYS92Q95WW&refRID=NHDYX8AJ5HRYS92Q95WW', 
            'stock' => 7,
            'size' => "",
            'photo2' => '/storage/female-cloths/robe4_photo2.jpg',
            'photo3' => '/storage/female-cloths/robe4_photo3.jpg',
            'photo4' => ""
        ]);

                DB::table('dresses')->insert([
           'name' => ' Robe Courte à Motif Floral Multicolore Boho Africain',
           'description' => ' Cotton, Polyester .',
           'photo' => '/storage/female-cloths/robe5.jpg',
           'price' => 16.89,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/dp/B07TJFD97L/ref=twister_B07TJFGQFP', 
            'stock' => 7,
            'size' => "",
            'photo2' => "",
            'photo3' => "",
            'photo4' => ""
        ]);

                  DB::table('dresses')->insert([
           'name' => 'OLIPHEE Robe Grande Taille Femme Epaule Dénudée',
           'description' => 'Manches Longues Col Rond Robe de Soirée .',
           'photo' => '/storage/female-cloths/robe6.jpg',
           'price' => 13.89,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/OLIPHEE-D%C3%A9nud%C3%A9e-Imprimer-Manches-Longues/dp/B07TJNJ6JB/ref=pd_sbs_193_5/257-7924672-5292616?_encoding=UTF8&pd_rd_i=B07TMYNCHL&pd_rd_r=f341c264-7114-4d62-b638-c87d2496c61c&pd_rd_w=SXLwv&pd_rd_wg=Fm8aP&pf_rd_p=26d54ac2-ee81-4c62-8302-1e18ced12245&pf_rd_r=ERY2S0CH8WHR4TTRK544&refRID=ERY2S0CH8WHR4TTRK544&th=1', 
            'stock' => 7,
            'size' => "",
            'photo2' => "",
            'photo3' => "",
            'photo4' => ""
        ]);

                    DB::table('dresses')->insert([
           'name' => "Ladyjiao Femme 50's Stripe Ethnique Africaine imprimée Robe Vintage  ",
           'description' => '95% Polyester, 5% Élasthanne.',
           'photo' => '/storage/female-cloths/robe7.jpg',
           'price' => 22.99,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/Ladyjiao-Ethnique-Africain-Rockabilly-Cocktail/dp/B07FDPN6MJ/ref=pd_sbs_193_8?_encoding=UTF8&pd_rd_i=B07FDPN6MJ&pd_rd_r=2eeb6a9d-2591-4400-9dd3-44893dc92a3e&pd_rd_w=SczRs&pd_rd_wg=uhcAD&pf_rd_p=26d54ac2-ee81-4c62-8302-1e18ced12245&pf_rd_r=4WKG67VHYWJGAN58SXAM&refRID=4WKG67VHYWJGAN58SXAM', 
            'stock' => 7,
            'size' => "",
            'photo2' => '/storage/female-cloths/robe7_photo2.jpg',
            'photo3' => "",
            'photo4' => ""
        ]);

             DB::table('dresses')->insert([
           'name' => "Veste décontractée Femme Dashiki Manches Longues",
           'description' => 'Matière: Polyester,  Type de col: Col chemise classique .',
           'photo' => '/storage/female-cloths/blouson1.jpg',
           'price' => 12.99,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/dp/B07FX1JNDR/ref=twister_B07FX9TXZC?_encoding=UTF8&psc=1',
           'stock' => 7,
           'size' => "",
           'photo2' => "/storage/female-cloths/blouson1_photo2.jpg",
            'photo3' => "/storage/female-cloths/blouson1_photo3.jpg",
            'photo4' => ""
        ]);


  DB::table('dresses')->insert([
           'name' => "Wrap Africain Traditionnel Cire Imprimé Ankara Coton Foulard (Orange) ",
           'description' => 'Taille moyenne:90cm*110cm, tissu de coton africain de qualité supérieure.',
           'photo' => '/storage/female-cloths/foulard1.jpg',
           'price' => 13.88,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/Mishow-D%C3%A9coratif-National-Africain-Traditionnel/dp/B07PJQ3QR9/ref=sr_1_8?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=foulard%2Bwax&qid=1571508559&s=apparel&sr=1-8&th=1',
           'stock' => 7,
           'size' => "",
           'photo2' => "",
            'photo3' =>"",
            'photo4' =>""
        ]);


   DB::table('dresses')->insert([
           'name' => "Tonwalk Jupe Package Taille Haute",
           'description' => 'Polyester + Tissu .',
           'photo' => '/storage/female-cloths/jupe1.jpg',
           'price' => 8.99 ,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/Package-Tonwalk-Impression-Moulante-Multicolore/dp/B01MSPSLDC/ref=sr_1_8?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=jupe+wax&psc=1&qid=1571508746&sr=8-8',
           'stock' => 7,
           'size' => "",
           'photo2' => "",
            'photo3' =>"",
            'photo4' =>""
        ]);


  DB::table('dresses')->insert([
           'name' => " Jupe Longue Maxi Imprimée Bohémien ",
           'description' => ' coton, Spandex, Polyester .',
           'photo' => '/storage/female-cloths/jupe2.jpg',
           'price' => 17.99,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/dp/B07TV32J34/ref=twister_B07TV4BQHV',
           'stock' => 7,
           'size' => "",
           'photo2' => "",
            'photo3' =>"",
            'photo4' =>""
        ]);


   DB::table('dresses')->insert([
           'name' => "LHWY Blouson Femme, Manteau Manches Longues Veste Courte imprimée",
           'description' => 'Polyester.',
           'photo' => '/storage/female-cloths/veste1new.jpg',
           'price' => 8.49,
           'quantity' => 1,
           'URL' => 'https://www.amazon.fr/Blousons-LHWY-manteau-imprim%C3%A9s-africains/dp/B06XXFZR16/ref=sr_1_3?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=veste+wax&psc=1&qid=1571509047&s=apparel&sr=1-3',
           'stock' => 7,
           'size' => "",
           'photo2' =>  "/storage/female-cloths/veste1.jpg",
            'photo3' => "/storage/female-cloths/veste1_photo3.jpg",
            'photo4' => ""
        ]);
    }
}
