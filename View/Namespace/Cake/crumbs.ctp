<?php
switch ($state) {
	case self::TAG_OPEN:
	case self::TAG_SELF:
		echo $this->compile('$out = $this->%s->getCrumbList(%s, %s); $set = %s; if (!empty($set)) { $this->set($set, $out); } else { echo $out; }', $this->{$ns}->settings['classes']['Html'], $this->resolve($attrs, 'options', array('type' => self::TYPE_ARRAY)), $this->resolve($attrs, 'start'), $this->resolve($attrs, 'set'));
}

