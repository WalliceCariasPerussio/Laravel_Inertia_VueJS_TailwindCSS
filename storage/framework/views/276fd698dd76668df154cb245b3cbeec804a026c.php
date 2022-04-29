<!DOCTYPE html>
<html>
  <head>
       <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title inertia><?php echo e(config('app.name', 'Laravel')); ?></title>

    <?php if(env('APP_ENV') == 'local'): ?>
      <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet" />
      <script src="<?php echo e(mix('/js/app.js')); ?>" defer></script>
    <?php else: ?>
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet" />
      <script src="<?php echo e(asset('/js/app.js')); ?>" defer></script>
    <?php endif; ?>

    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
  </head>
  <body>
    <?php if (!isset($__inertiaSsr)) { $__inertiaSsr = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsr instanceof \Inertia\Ssr\Response) { echo $__inertiaSsr->body; } else { ?><div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div><?php } ?>
  </body>
</html>
<?php /**PATH /var/www/html/resources/views/app.blade.php ENDPATH**/ ?>