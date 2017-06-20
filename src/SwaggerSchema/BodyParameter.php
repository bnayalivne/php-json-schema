<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace Swaggest\JsonSchema\SwaggerSchema;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema as JsonBasicSchema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class BodyParameter extends ClassStructure {
	/** @var string A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed. */
	public $description;

	/** @var string The name of the parameter. */
	public $name;

	/** @var string Determines the location of the parameter. */
	public $in;

	/** @var bool Determines whether or not this parameter is required or optional. */
	public $required;

	/** @var Schema A deterministic version of a JSON Schema object. */
	public $schema;

	/**
	 * @param Properties|static $properties
	 * @param JsonBasicSchema $ownerSchema
	 */
	public static function setUpProperties($properties, JsonBasicSchema $ownerSchema)
	{
		$properties->description = JsonBasicSchema::string();
		$properties->description->description = 'A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.';
		$properties->name = JsonBasicSchema::string();
		$properties->name->description = 'The name of the parameter.';
		$properties->in = JsonBasicSchema::string();
		$properties->in->description = 'Determines the location of the parameter.';
		$properties->in->enum = array (
		  0 => 'body',
		);
		$properties->required = JsonBasicSchema::boolean();
		$properties->required->description = 'Determines whether or not this parameter is required or optional.';
		$properties->required->default = false;
		$properties->schema = Schema::schema();
		$ownerSchema->type = 'object';
		$ownerSchema->additionalProperties = false;
		$ownerSchema->patternProperties['^x-'] = new JsonBasicSchema();
		$ownerSchema->patternProperties['^x-']->description = 'Any property starting with x- is valid.';
		$ownerSchema->required = array (
		  0 => 'name',
		  1 => 'in',
		  2 => 'schema',
		);
	}

	/**
	 * @param string $description A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.
	 * @return $this
	 */
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @param string $name The name of the parameter.
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @param string $in Determines the location of the parameter.
	 * @return $this
	 */
	public function setIn($in)
	{
		$this->in = $in;
		return $this;
	}

	/**
	 * @param bool $required Determines whether or not this parameter is required or optional.
	 * @return $this
	 */
	public function setRequired($required)
	{
		$this->required = $required;
		return $this;
	}

	/**
	 * @param Schema $schema A deterministic version of a JSON Schema object.
	 * @return $this
	 */
	public function setSchema($schema)
	{
		$this->schema = $schema;
		return $this;
	}
}
