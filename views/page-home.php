<?php get_header(); ?>
<div ng-controller="mainCtrl" class="background-container">
        <!-- <div class="main-image"></div>
</div>
<div class="header">
    ANNA CRAMER -->
</div>

<ui-view></ui-view>

        <div class="paint-menu" ng-class="{'small':isSmall, 'big':!isSmall}" ng-click="isSmall = !isSmall">
        </div>
        <nav>
          <ul>
              <li>
                <a href="cramerart.com/gallery">Gallery</a>
                <a ng-repeat="prop in nav" ui-sref="{{prop.link}}">{{prop.name}}</a>
              </li>
          </ul>
      </nav>

<?php get_footer(); ?>