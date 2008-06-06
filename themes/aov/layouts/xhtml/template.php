<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<? include 'common/htmlhead.php' ?>

<body>

<div id="doc">

	<div id="hd" class="clearfix">
		<h1><?= $this->site_title ?></h1>
	</div>

	<div id="bd">

		<?= $this->navbar ?>
		<h2 id="page_title"><?= $this->title ?></h2>

		<div id="content">
			<?= $this->content ?>
		</div>

		<div id="sidebar">
			<?= $this->sidebar ?>
		</div>

	</div>

	<div id="ft">
	</div>

</div>

<?= $this->google_analytics ?>

</body>
</html>