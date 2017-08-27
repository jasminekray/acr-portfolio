<?php get_header(); ?>

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
