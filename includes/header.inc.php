<?php
    $menuLinkList = [
        [
            "name" => "Home",
            "link" => BASE_URL,
        ],
        [
            "name" => "About Us",
            "link" => "about-us.php",
        ],
        [
            "name" => "Our Services",
            "link" => "services.php",
            "subMenu" => [
                [
                    "name" => "Web Design",
                    "link" => "web-design.php",
                ],  
            ]
        ], 
        [
            "name" => "About",
            "link" => "#",
        ],
        [
            "name" => "Pricing",
            "link" => "#",
        ],
        [
            "name" => "Contact Us",
            "link" => "contact-us.php",
        ]
    ];
?>

<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 justify-between items-center">
      
      <!-- Logo -->
      <div class="flex-shrink-0 flex items-center text-white font-bold text-xl">
        <?= SITE_NAME ?>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden sm:flex space-x-6">
        <ul class="flex space-x-4">
          <?php foreach($menuLinkList as $menuLink) { ?> 
              <?php if(isset($menuLink['subMenu']) && count($menuLink['subMenu']) > 0) { ?>
                  <li class="relative group">
                      <button class="text-gray-300 hover:text-white font-medium">
                          <?php echo $menuLink['name'];?>
                      </button>
                      <!-- Dropdown -->
                      <div class="absolute hidden group-hover:block bg-white rounded-md shadow-md mt-2">
                          <ul class="py-2 w-40">
                              <?php foreach($menuLink['subMenu'] as $link) { ?>
                                  <li>
                                      <a href="<?= BASE_URL ?><?php echo $link['link'];?>"
                                         class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                          <?php echo $link['name'];?>
                                      </a>
                                  </li>
                              <?php } ?>
                          </ul>
                      </div>
                  </li>
              <?php } else { ?>
                  <li>
                      <a href="<?= BASE_URL ?><?php echo $menuLink['link'];?>"
                         class="text-gray-300 hover:text-white font-medium">
                          <?php echo $menuLink['name'];?>
                      </a>
                  </li>
              <?php } ?>
          <?php } ?>  
        </ul>
      </div>

      <!-- Mobile Menu Button -->
      <div class="sm:hidden">
        <button id="mobile-menu-toggle" class="text-gray-400 hover:text-white focus:outline-none">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden sm:hidden px-2 pb-3 space-y-1">
    <?php foreach($menuLinkList as $menuLink) { ?>
        <?php if(isset($menuLink['subMenu']) && count($menuLink['subMenu']) > 0) { ?>
            <div>
              <button class="w-full text-left px-3 py-2 text-gray-300 hover:text-white font-medium">
                <?php echo $menuLink['name'];?>
              </button>
              <div class="pl-4">
                <?php foreach($menuLink['subMenu'] as $link) { ?>
                    <a href="<?= BASE_URL ?><?php echo $link['link'];?>"
                       class="block px-3 py-2 text-gray-400 hover:text-white">
                        <?php echo $link['name'];?>
                    </a>
                <?php } ?>
              </div>
            </div>
        <?php } else { ?>
            <a href="<?= BASE_URL ?><?php echo $menuLink['link'];?>"
               class="block px-3 py-2 text-gray-300 hover:text-white font-medium">
                <?php echo $menuLink['name'];?>
            </a>
        <?php } ?>
    <?php } ?>
  </div>
</nav>

<script>
  document.getElementById("mobile-menu-toggle").addEventListener("click", function() {
    document.getElementById("mobile-menu").classList.toggle("hidden");
  });
</script>
