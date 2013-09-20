<?php
include_once("../common.php");
include_once($config['include_path']."block.php");
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<?php show_meta();?>

</head>
<body>
<?php show_header();?>

<article class="vdemo-intro">
	<h2>日历</h2>
	<p>一个标准的日历</p>
	<pre class="vdemo-code">
&lt;div class="<strong>vg-2</strong>"&gt;
  &lt;div class="<strong>vg-item</strong>"&gt;Content&lt;/div&gt;
  &lt;div class="<strong>vg-item</strong>"&gt;Content&lt;/div&gt;
&lt;/div&gt;
</pre>
</article>

<style type="text/css">
.vp-cal {
	width: 100%;
}
.vp-cal th, .vp-cal td {
	height: 40px;
	position: relative;
	text-align: center;
	border: 1px solid #ddd;
	width: 14.285%;
}
</style>

<div class="vdemo-demo">
	<table class="vp-cal">
		<thead>
			<tr>
				<th class="">Su</th>
				<th>Mo</th>
				<th>Tu</th>
				<th>We</th>
				<th>Th</th>
				<th>Fr</th>
				<th>Sa</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>30</td>
				<td>31</td>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
				<td>11</td>
				<td>12</td>
			</tr>
			<tr>
				<td>13</td>
				<td>14</td>
				<td>15</td>
				<td>16</td>
				<td>17</td>
				<td>18</td>
				<td>19</td>
			</tr>
			<tr>
				<td>20</td>
				<td>21</td>
				<td>22</td>
				<td>23</td>
				<td>24</td>
				<td>25</td>
				<td>26</td>
			</tr>
			<tr>
				<td>27</td>
				<td>28</td>
				<td>29</td>
				<td>30</td>
				<td>31</td>
				<td>1</td>
				<td>2</td>
			</tr>
		</tbody>
	</table>
</div>
<?php show_footer();?>
</body>
</html>