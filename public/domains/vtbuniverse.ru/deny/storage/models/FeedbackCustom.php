<?php

class FeedbackCustom extends Model {

							public function fieldKategory()
							{
								return $this->belongsTo('Option');
							}
						
							public function fieldRadios()
							{
								return $this->belongsTo('Option');
							}
						
}
