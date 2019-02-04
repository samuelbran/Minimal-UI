<aside class="column is-3-tablet">
  <ul>
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar')) : ?>
      <li>No widgets in use.</li>
    <?php endif; ?>
  </ul>
</aside>
