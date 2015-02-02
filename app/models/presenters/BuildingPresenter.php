<?php

class BuildingPresenter extends BasePresenter{

	public function getBuildButton(){
		return'<a class="btn-block build-button"
					data-container="body"
					data-trigger="hover"
					data-toggle="popover"
					data-title="' . $this->name. '"
					data-placement="left"
					data-content="Produces: ' . $this->production->product. '"
					data-instance-id="' . $this->id . '"
						>
						Build ' . $this->name .'
				</a>';
	}
} 