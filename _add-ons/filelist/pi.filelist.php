<?php
class Plugin_filelist extends Plugin {
	
	var $meta = array(
		'name'       => 'File list',
		'version'    => '0.1',
		'author'     => 'Gareth de Walters',
		'author_url' => 'http://www.abi.auckland.ac.nz/'
	);

	public function index() {
		$url            = $this->fetchParam('url', null);
		$releasefilter  = $this->fetchParam('releasefilter', null);
		$osfilter       = $this->fetchParam('osfilter', null);
		$limit          = $this->fetchParam('limit', 10);
		
		// Get contents of directory as array.
		$scanned_directory = array_diff(scandir($url), array('..', '.'));

		// Filter values of $scanned_directory based on parameter 
		// input (partial filename) into new array -> $result.
		$result = array_filter($scanned_directory, function ($item) use ($releasefilter) {
		    if (stripos($item, $releasefilter) !== false) {
		        return true;
		    }
		    return false;
		});

		// Filter result array based on parameter input (OS) 
		$result = array_filter($result, function ($item) use ($osfilter) {
		    if (stripos($item, $osfilter) !== false) {
		        return true;
		    }
		    return false;
		});
		
		// Sort the filtered array to ensure latest developer releases appear first.
		sort($result, SORT_NUMERIC); 

		// Output list filtered by file name and OS to HTML and apply limit
		$i = 1;
		$out="<ul class=\"arrow\">";
		foreach($result as $file){
			$out=$out.'<li><a href="'.$url.$file.'">'.$file.'</a></li>';
			if ($i++ == $limit) break;
		}
		$out=$out."</ul>";
		return $out;
	}

}


















