<?php namespace Application\Atoms\Entity;

use Atomino\Carbon\Database\Finder\Filter;
use Atomino\Carbon\Attributes\Field;
use Atomino\Carbon\Attributes\Immutable;
use Atomino\Carbon\Attributes\Protect;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Entity;
use Atomino\Carbon\Model;
use Atomino\Carbon\Attributes\RequiredField;


/**
 * @method static \Application\Atoms\EntityFinder\_Guest search( Filter $filter = null )
 * #[Immutable( 'guid', true )]
 * #[Protect( 'guid', true, false )]
 * #[RequiredField('guid', StringField::class)]
 * @method static \Atomino\Carbon\Database\Finder\Comparison created($isin = null)
 * @property-read \DateTime|null $created
 * @method static \Atomino\Carbon\Database\Finder\Comparison email($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison foodticket($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison guid($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison id($isin = null)
 * @property-read int|null $id
 * @method static \Atomino\Carbon\Database\Finder\Comparison lang($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison mobile($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison name($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison organisation($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison programs($isin = null)
 */
#[RequiredField('id', \Atomino\Carbon\Field\IntField::class)]
#[Immutable("created", true)]
#[Protect("created", true, false)]
#[RequiredField("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Field("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Validator("email", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("email", \Atomino\Carbon\Field\StringField::class)]
#[Field("foodticket", \Atomino\Carbon\Field\JsonField::class)]
#[Validator("guid", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>36])]
#[Field("guid", \Atomino\Carbon\Field\StringField::class)]
#[Field("id", \Atomino\Carbon\Field\IntField::class)]
#[Protect("id", true, false)]
#[Immutable("id",false)]
#[Validator("lang", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>5])]
#[Field("lang", \Atomino\Carbon\Field\StringField::class)]
#[Validator("mobile", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>20])]
#[Field("mobile", \Atomino\Carbon\Field\StringField::class)]
#[Validator("name", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("name", \Atomino\Carbon\Field\StringField::class)]
#[Validator("organisation", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("organisation", \Atomino\Carbon\Field\StringField::class)]
#[Field("programs", \Atomino\Carbon\Field\JsonField::class)]
abstract class _Guest extends Entity {
	static null|Model $model = null;
	use \Atomino\Carbon\Plugins\Created\CreatedTrait;
	use \Atomino\Carbon\Plugins\Guid\GuidTrait;
	const created = 'created';
	protected \DateTime|null $created = null;
	protected function getCreated():\DateTime|null{ return $this->created;}
	const email = 'email';
	public string|null $email = null;
	const foodticket = 'foodticket';
	public array $foodticket = [];
	const guid = 'guid';
	public string|null $guid = null;
	const id = 'id';
	protected int|null $id = null;
	protected function getId():int|null{ return $this->id;}
	const lang = 'lang';
	public string|null $lang = null;
	const mobile = 'mobile';
	public string|null $mobile = null;
	const name = 'name';
	public string|null $name = null;
	const organisation = 'organisation';
	public string|null $organisation = null;
	const programs = 'programs';
	public array $programs = [];
}





