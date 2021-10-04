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
 * @method static \Application\Atoms\EntityFinder\_Eventacs search( Filter $filter = null )
 * @method static \Atomino\Carbon\Database\Finder\Comparison created($isin = null)
 * @property-read \DateTime|null $created
 * @method static \Atomino\Carbon\Database\Finder\Comparison id($isin = null)
 * @property-read int|null $id
 * @method static \Atomino\Carbon\Database\Finder\Comparison phase($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison qrcode($isin = null)
 * @method static \Atomino\Carbon\Database\Finder\Comparison station($isin = null)
 */
#[RequiredField('id', \Atomino\Carbon\Field\IntField::class)]
#[Immutable("created", true)]
#[Protect("created", true, false)]
#[RequiredField("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Field("created", \Atomino\Carbon\Field\DateTimeField::class)]
#[Field("id", \Atomino\Carbon\Field\IntField::class)]
#[Protect("id", true, false)]
#[Immutable("id",false)]
#[Validator("phase", \Symfony\Component\Validator\Constraints\PositiveOrZero::class)]
#[Field("phase", \Atomino\Carbon\Field\IntField::class)]
#[Validator("qrcode", \Symfony\Component\Validator\Constraints\Length::class, ['max'=>150])]
#[Field("qrcode", \Atomino\Carbon\Field\StringField::class)]
#[Validator("station", \Symfony\Component\Validator\Constraints\PositiveOrZero::class)]
#[Field("station", \Atomino\Carbon\Field\IntField::class)]
abstract class _Eventacs extends Entity {
	static null|Model $model = null;
	use \Atomino\Carbon\Plugins\Created\CreatedTrait;
	const created = 'created';
	protected \DateTime|null $created = null;
	protected function getCreated():\DateTime|null{ return $this->created;}
	const id = 'id';
	protected int|null $id = null;
	protected function getId():int|null{ return $this->id;}
	const phase = 'phase';
	public int|null $phase = null;
	const qrcode = 'qrcode';
	public string|null $qrcode = null;
	const station = 'station';
	public int|null $station = null;
}





