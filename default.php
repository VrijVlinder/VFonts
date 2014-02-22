<?php
// Define the plugin:
$PluginInfo['VFonts'] = array(
   'Name'=>'VFonts',
   'Description' => 'Changes the font family to any font face you want.',
   'Version' => '1.2',
   'MobileFriendly'=>TRUE,
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => 'http://www.vrijvlinder.com'
);


class VFontsPlugin extends Gdn_Plugin {
   

      public function Base_Render_Before($Sender) {
  if($Sender->MasterView != 'admin') {
    // Only add the style sheet on the frontend
    if(IsMobile()) {
      $Sender->AddCssFile('plugins/VFonts/vfm.css');
    }
    else {
      $Sender->AddCssFile('plugins/VFonts/vf.css');
    }
  }
}


   public function Setup() {
     
   }
} 