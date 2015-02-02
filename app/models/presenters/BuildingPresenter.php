<?php

class BuildingPresenter extends BasePresenter{

	public function getBuildButton(){
		return'<a class="btn-block build-button"
					data-container="body"
					data-trigger="hover"
					data-toggle="popover"
					data-title="' . $this->name. '"
					data-placement="left"
					data-html="true"
					data-content="' . $this->getTooltipContent() . '"
					data-instance-id="' . $this->id . '"
						>
						Build ' . $this->name .'
				</a>';
	}

	public function getTooltipContent(){
		$content = '';
		if($this->production->upkeep > 0){
			$content .= 'Upkeep: ' . $this->production->upkeep . "<br />";
		}
		if($this->production->condition != null && $this->production->product != null){
			$content .= 'Turns ' . $this->production->productConditionQuantity  . ' '. $this->production->condition;
			$content .= ' into '  . $this->production->productQuantity. ' '. $this->production->product . "<br />";
		}elseif($this->production->condition == null){
			$content .= ' Produces '  . $this->production->productQuantity . ' '. $this->production->product . "<br />";
		}
		return $content;
	}
} 