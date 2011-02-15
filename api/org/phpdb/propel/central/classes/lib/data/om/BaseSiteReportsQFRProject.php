<?php

require_once 'propel/om/BaseObject.php';

require_once 'propel/om/Persistent.php';


include_once 'propel/util/Criteria.php';

include_once 'lib/data/SiteReportsQFRProjectPeer.php';

/**
 * Base class that represents a row from the 'SITEREPORTS_QFR_PROJECT' table.
 *
 * 
 *
 * @package    lib.data.om
 */
abstract class BaseSiteReportsQFRProject extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SiteReportsQFRProjectPeer
	 */
	protected static $peer;


	/**
	 * The value for the id field.
	 * @var        double
	 */
	protected $id;


	/**
	 * The value for the qfr_id field.
	 * @var        double
	 */
	protected $qfr_id;


	/**
	 * The value for the pi field.
	 * @var        string
	 */
	protected $pi;


	/**
	 * The value for the project_id field.
	 * @var        string
	 */
	protected $project_id;


	/**
	 * The value for the project_number field.
	 * @var        double
	 */
	protected $project_number;


	/**
	 * The value for the p_cost field.
	 * @var        double
	 */
	protected $p_cost;


	/**
	 * The value for the e_cost field.
	 * @var        double
	 */
	protected $e_cost;


	/**
	 * The value for the psc_cost field.
	 * @var        double
	 */
	protected $psc_cost;


	/**
	 * The value for the odc_cost field.
	 * @var        double
	 */
	protected $odc_cost;


	/**
	 * The value for the ic_cost field.
	 * @var        double
	 */
	protected $ic_cost;


	/**
	 * The value for the created_by field.
	 * @var        string
	 */
	protected $created_by;


	/**
	 * The value for the created_on field.
	 * @var        int
	 */
	protected $created_on;


	/**
	 * The value for the updated_by field.
	 * @var        string
	 */
	protected $updated_by;


	/**
	 * The value for the updated_on field.
	 * @var        int
	 */
	protected $updated_on;

	/**
	 * @var        SiteReportsQFR
	 */
	protected $aSiteReportsQFR;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     double
	 */
	public function getID()
	{

		return $this->id;
	}

	/**
	 * Get the [qfr_id] column value.
	 * 
	 * @return     double
	 */
	public function getQFR_ID()
	{

		return $this->qfr_id;
	}

	/**
	 * Get the [pi] column value.
	 * 
	 * @return     string
	 */
	public function getPI()
	{

		return $this->pi;
	}

	/**
	 * Get the [project_id] column value.
	 * 
	 * @return     string
	 */
	public function getPROJECT_ID()
	{

		return $this->project_id;
	}

	/**
	 * Get the [project_number] column value.
	 * 
	 * @return     double
	 */
	public function getPROJECT_NUMBER()
	{

		return $this->project_number;
	}

	/**
	 * Get the [p_cost] column value.
	 * 
	 * @return     double
	 */
	public function getP_COST()
	{

		return $this->p_cost;
	}

	/**
	 * Get the [e_cost] column value.
	 * 
	 * @return     double
	 */
	public function getE_COST()
	{

		return $this->e_cost;
	}

	/**
	 * Get the [psc_cost] column value.
	 * 
	 * @return     double
	 */
	public function getPSC_COST()
	{

		return $this->psc_cost;
	}

	/**
	 * Get the [odc_cost] column value.
	 * 
	 * @return     double
	 */
	public function getODC_COST()
	{

		return $this->odc_cost;
	}

	/**
	 * Get the [ic_cost] column value.
	 * 
	 * @return     double
	 */
	public function getIC_COST()
	{

		return $this->ic_cost;
	}

	/**
	 * Get the [created_by] column value.
	 * 
	 * @return     string
	 */
	public function getCREATED_BY()
	{

		return $this->created_by;
	}

	/**
	 * Get the [optionally formatted] [created_on] column value.
	 * 
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the integer unix timestamp will be returned.
	 * @return     mixed Formatted date/time value as string or integer unix timestamp (if format is NULL).
	 * @throws     PropelException - if unable to convert the date/time to timestamp.
	 */
	public function getCREATED_ON($format = '%Y-%m-%d')
	{

		if ($this->created_on === null || $this->created_on === '') {
			return null;
		} elseif (!is_int($this->created_on)) {
			// a non-timestamp value was set externally, so we convert it
			$ts = strtotime($this->created_on);
			if ($ts === -1 || $ts === false) { // in PHP 5.1 return value changes to FALSE
				throw new PropelException("Unable to parse value of [created_on] as date/time value: " . var_export($this->created_on, true));
			}
		} else {
			$ts = $this->created_on;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	/**
	 * Get the [updated_by] column value.
	 * 
	 * @return     string
	 */
	public function getUPDATED_BY()
	{

		return $this->updated_by;
	}

	/**
	 * Get the [optionally formatted] [updated_on] column value.
	 * 
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the integer unix timestamp will be returned.
	 * @return     mixed Formatted date/time value as string or integer unix timestamp (if format is NULL).
	 * @throws     PropelException - if unable to convert the date/time to timestamp.
	 */
	public function getUPDATED_ON($format = '%Y-%m-%d')
	{

		if ($this->updated_on === null || $this->updated_on === '') {
			return null;
		} elseif (!is_int($this->updated_on)) {
			// a non-timestamp value was set externally, so we convert it
			$ts = strtotime($this->updated_on);
			if ($ts === -1 || $ts === false) { // in PHP 5.1 return value changes to FALSE
				throw new PropelException("Unable to parse value of [updated_on] as date/time value: " . var_export($this->updated_on, true));
			}
		} else {
			$ts = $this->updated_on;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      double $v new value
	 * @return     void
	 */
	public function setID($v)
	{

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::ID;
		}

	} // setID()

	/**
	 * Set the value of [qfr_id] column.
	 * 
	 * @param      double $v new value
	 * @return     void
	 */
	public function setQFR_ID($v)
	{

		if ($this->qfr_id !== $v) {
			$this->qfr_id = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::QFR_ID;
		}

		if ($this->aSiteReportsQFR !== null && $this->aSiteReportsQFR->getID() !== $v) {
			$this->aSiteReportsQFR = null;
		}

	} // setQFR_ID()

	/**
	 * Set the value of [pi] column.
	 * 
	 * @param      string $v new value
	 * @return     void
	 */
	public function setPI($v)
	{

		// Since the native PHP type for this column is string,
		// we will cast the input to a string (if it is not).
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pi !== $v) {
			$this->pi = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::PI;
		}

	} // setPI()

	/**
	 * Set the value of [project_id] column.
	 * 
	 * @param      string $v new value
	 * @return     void
	 */
	public function setPROJECT_ID($v)
	{

		// Since the native PHP type for this column is string,
		// we will cast the input to a string (if it is not).
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->project_id !== $v) {
			$this->project_id = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::PROJECT_ID;
		}

	} // setPROJECT_ID()

	/**
	 * Set the value of [project_number] column.
	 * 
	 * @param      double $v new value
	 * @return     void
	 */
	public function setPROJECT_NUMBER($v)
	{

		if ($this->project_number !== $v) {
			$this->project_number = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::PROJECT_NUMBER;
		}

	} // setPROJECT_NUMBER()

	/**
	 * Set the value of [p_cost] column.
	 * 
	 * @param      double $v new value
	 * @return     void
	 */
	public function setP_COST($v)
	{

		if ($this->p_cost !== $v) {
			$this->p_cost = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::P_COST;
		}

	} // setP_COST()

	/**
	 * Set the value of [e_cost] column.
	 * 
	 * @param      double $v new value
	 * @return     void
	 */
	public function setE_COST($v)
	{

		if ($this->e_cost !== $v) {
			$this->e_cost = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::E_COST;
		}

	} // setE_COST()

	/**
	 * Set the value of [psc_cost] column.
	 * 
	 * @param      double $v new value
	 * @return     void
	 */
	public function setPSC_COST($v)
	{

		if ($this->psc_cost !== $v) {
			$this->psc_cost = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::PSC_COST;
		}

	} // setPSC_COST()

	/**
	 * Set the value of [odc_cost] column.
	 * 
	 * @param      double $v new value
	 * @return     void
	 */
	public function setODC_COST($v)
	{

		if ($this->odc_cost !== $v) {
			$this->odc_cost = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::ODC_COST;
		}

	} // setODC_COST()

	/**
	 * Set the value of [ic_cost] column.
	 * 
	 * @param      double $v new value
	 * @return     void
	 */
	public function setIC_COST($v)
	{

		if ($this->ic_cost !== $v) {
			$this->ic_cost = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::IC_COST;
		}

	} // setIC_COST()

	/**
	 * Set the value of [created_by] column.
	 * 
	 * @param      string $v new value
	 * @return     void
	 */
	public function setCREATED_BY($v)
	{

		// Since the native PHP type for this column is string,
		// we will cast the input to a string (if it is not).
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::CREATED_BY;
		}

	} // setCREATED_BY()

	/**
	 * Set the value of [created_on] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setCREATED_ON($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { // in PHP 5.1 return value changes to FALSE
				throw new PropelException("Unable to parse date/time value for [created_on] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_on !== $ts) {
			$this->created_on = $ts;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::CREATED_ON;
		}

	} // setCREATED_ON()

	/**
	 * Set the value of [updated_by] column.
	 * 
	 * @param      string $v new value
	 * @return     void
	 */
	public function setUPDATED_BY($v)
	{

		// Since the native PHP type for this column is string,
		// we will cast the input to a string (if it is not).
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->updated_by !== $v) {
			$this->updated_by = $v;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::UPDATED_BY;
		}

	} // setUPDATED_BY()

	/**
	 * Set the value of [updated_on] column.
	 * 
	 * @param      int $v new value
	 * @return     void
	 */
	public function setUPDATED_ON($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { // in PHP 5.1 return value changes to FALSE
				throw new PropelException("Unable to parse date/time value for [updated_on] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_on !== $ts) {
			$this->updated_on = $ts;
			$this->modifiedColumns[] = SiteReportsQFRProjectPeer::UPDATED_ON;
		}

	} // setUPDATED_ON()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (1-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      ResultSet $rs The ResultSet class with cursor advanced to desired record pos.
	 * @param      int $startcol 1-based offset column which indicates which restultset column to start with.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getFloat($startcol + 0);

			$this->qfr_id = $rs->getFloat($startcol + 1);

			$this->pi = $rs->getString($startcol + 2);

			$this->project_id = $rs->getString($startcol + 3);

			$this->project_number = $rs->getFloat($startcol + 4);

			$this->p_cost = $rs->getFloat($startcol + 5);

			$this->e_cost = $rs->getFloat($startcol + 6);

			$this->psc_cost = $rs->getFloat($startcol + 7);

			$this->odc_cost = $rs->getFloat($startcol + 8);

			$this->ic_cost = $rs->getFloat($startcol + 9);

			$this->created_by = $rs->getString($startcol + 10);

			$this->created_on = $rs->getDate($startcol + 11, null);

			$this->updated_by = $rs->getString($startcol + 12);

			$this->updated_on = $rs->getDate($startcol + 13, null);

			$this->resetModified();

			$this->setNew(false);

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 14; // 14 = SiteReportsQFRProjectPeer::NUM_COLUMNS - SiteReportsQFRProjectPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating SiteReportsQFRProject object", $e);
		}
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      Connection $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SiteReportsQFRProjectPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SiteReportsQFRProjectPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	/**
	 * Stores the object in the database.  If the object is new,
	 * it inserts it; otherwise an update is performed.  This method
	 * wraps the doSave() worker method in a transaction.
	 *
	 * @param      Connection $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SiteReportsQFRProjectPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	/**
	 * Stores the object in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      Connection $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave($con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aSiteReportsQFR !== null) {
				if ($this->aSiteReportsQFR->isModified()) {
					$affectedRows += $this->aSiteReportsQFR->save($con);
				}
				$this->setSiteReportsQFR($this->aSiteReportsQFR);
			}


			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SiteReportsQFRProjectPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setID($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += SiteReportsQFRProjectPeer::doUpdate($this, $con);
				}
				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aSiteReportsQFR !== null) {
				if (!$this->aSiteReportsQFR->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSiteReportsQFR->getValidationFailures());
				}
			}


			if (($retval = SiteReportsQFRProjectPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants TYPE_PHPNAME,
	 *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SiteReportsQFRProjectPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getID();
				break;
			case 1:
				return $this->getQFR_ID();
				break;
			case 2:
				return $this->getPI();
				break;
			case 3:
				return $this->getPROJECT_ID();
				break;
			case 4:
				return $this->getPROJECT_NUMBER();
				break;
			case 5:
				return $this->getP_COST();
				break;
			case 6:
				return $this->getE_COST();
				break;
			case 7:
				return $this->getPSC_COST();
				break;
			case 8:
				return $this->getODC_COST();
				break;
			case 9:
				return $this->getIC_COST();
				break;
			case 10:
				return $this->getCREATED_BY();
				break;
			case 11:
				return $this->getCREATED_ON();
				break;
			case 12:
				return $this->getUPDATED_BY();
				break;
			case 13:
				return $this->getUPDATED_ON();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType One of the class type constants TYPE_PHPNAME,
	 *                        TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SiteReportsQFRProjectPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getID(),
			$keys[1] => $this->getQFR_ID(),
			$keys[2] => $this->getPI(),
			$keys[3] => $this->getPROJECT_ID(),
			$keys[4] => $this->getPROJECT_NUMBER(),
			$keys[5] => $this->getP_COST(),
			$keys[6] => $this->getE_COST(),
			$keys[7] => $this->getPSC_COST(),
			$keys[8] => $this->getODC_COST(),
			$keys[9] => $this->getIC_COST(),
			$keys[10] => $this->getCREATED_BY(),
			$keys[11] => $this->getCREATED_ON(),
			$keys[12] => $this->getUPDATED_BY(),
			$keys[13] => $this->getUPDATED_ON(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants TYPE_PHPNAME,
	 *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SiteReportsQFRProjectPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setID($value);
				break;
			case 1:
				$this->setQFR_ID($value);
				break;
			case 2:
				$this->setPI($value);
				break;
			case 3:
				$this->setPROJECT_ID($value);
				break;
			case 4:
				$this->setPROJECT_NUMBER($value);
				break;
			case 5:
				$this->setP_COST($value);
				break;
			case 6:
				$this->setE_COST($value);
				break;
			case 7:
				$this->setPSC_COST($value);
				break;
			case 8:
				$this->setODC_COST($value);
				break;
			case 9:
				$this->setIC_COST($value);
				break;
			case 10:
				$this->setCREATED_BY($value);
				break;
			case 11:
				$this->setCREATED_ON($value);
				break;
			case 12:
				$this->setUPDATED_BY($value);
				break;
			case 13:
				$this->setUPDATED_ON($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME,
	 * TYPE_NUM. The default key type is the column's phpname (e.g. 'authorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SiteReportsQFRProjectPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setID($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setQFR_ID($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPI($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPROJECT_ID($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPROJECT_NUMBER($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setP_COST($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setE_COST($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPSC_COST($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setODC_COST($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setIC_COST($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCREATED_BY($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCREATED_ON($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUPDATED_BY($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setUPDATED_ON($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SiteReportsQFRProjectPeer::DATABASE_NAME);

		if ($this->isColumnModified(SiteReportsQFRProjectPeer::ID)) $criteria->add(SiteReportsQFRProjectPeer::ID, $this->id);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::QFR_ID)) $criteria->add(SiteReportsQFRProjectPeer::QFR_ID, $this->qfr_id);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::PI)) $criteria->add(SiteReportsQFRProjectPeer::PI, $this->pi);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::PROJECT_ID)) $criteria->add(SiteReportsQFRProjectPeer::PROJECT_ID, $this->project_id);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::PROJECT_NUMBER)) $criteria->add(SiteReportsQFRProjectPeer::PROJECT_NUMBER, $this->project_number);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::P_COST)) $criteria->add(SiteReportsQFRProjectPeer::P_COST, $this->p_cost);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::E_COST)) $criteria->add(SiteReportsQFRProjectPeer::E_COST, $this->e_cost);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::PSC_COST)) $criteria->add(SiteReportsQFRProjectPeer::PSC_COST, $this->psc_cost);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::ODC_COST)) $criteria->add(SiteReportsQFRProjectPeer::ODC_COST, $this->odc_cost);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::IC_COST)) $criteria->add(SiteReportsQFRProjectPeer::IC_COST, $this->ic_cost);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::CREATED_BY)) $criteria->add(SiteReportsQFRProjectPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::CREATED_ON)) $criteria->add(SiteReportsQFRProjectPeer::CREATED_ON, $this->created_on);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::UPDATED_BY)) $criteria->add(SiteReportsQFRProjectPeer::UPDATED_BY, $this->updated_by);
		if ($this->isColumnModified(SiteReportsQFRProjectPeer::UPDATED_ON)) $criteria->add(SiteReportsQFRProjectPeer::UPDATED_ON, $this->updated_on);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SiteReportsQFRProjectPeer::DATABASE_NAME);

		$criteria->add(SiteReportsQFRProjectPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     double
	 */
	public function getPrimaryKey()
	{
		return $this->getID();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      double $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setID($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of SiteReportsQFRProject (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setQFR_ID($this->qfr_id);

		$copyObj->setPI($this->pi);

		$copyObj->setPROJECT_ID($this->project_id);

		$copyObj->setPROJECT_NUMBER($this->project_number);

		$copyObj->setP_COST($this->p_cost);

		$copyObj->setE_COST($this->e_cost);

		$copyObj->setPSC_COST($this->psc_cost);

		$copyObj->setODC_COST($this->odc_cost);

		$copyObj->setIC_COST($this->ic_cost);

		$copyObj->setCREATED_BY($this->created_by);

		$copyObj->setCREATED_ON($this->created_on);

		$copyObj->setUPDATED_BY($this->updated_by);

		$copyObj->setUPDATED_ON($this->updated_on);


		$copyObj->setNew(true);

		$copyObj->setID(NULL); // this is a pkey column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     SiteReportsQFRProject Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     SiteReportsQFRProjectPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SiteReportsQFRProjectPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a SiteReportsQFR object.
	 *
	 * @param      SiteReportsQFR $v
	 * @return     void
	 * @throws     PropelException
	 */
	public function setSiteReportsQFR($v)
	{


		if ($v === null) {
			$this->setQFR_ID(NULL);
		} else {
			$this->setQFR_ID($v->getID());
		}


		$this->aSiteReportsQFR = $v;
	}


	/**
	 * Get the associated SiteReportsQFR object
	 *
	 * @param      Connection Optional Connection object.
	 * @return     SiteReportsQFR The associated SiteReportsQFR object.
	 * @throws     PropelException
	 */
	public function getSiteReportsQFR($con = null)
	{
		// include the related Peer class
		include_once 'lib/data/om/BaseSiteReportsQFRPeer.php';

		if ($this->aSiteReportsQFR === null && ($this->qfr_id > 0)) {

			$this->aSiteReportsQFR = SiteReportsQFRPeer::retrieveByPK($this->qfr_id, $con);

			/* The following can be used instead of the line above to
			   guarantee the related object contains a reference
			   to this object, but this level of coupling
			   may be undesirable in many circumstances.
			   As it can lead to a db query with many results that may
			   never be used.
			   $obj = SiteReportsQFRPeer::retrieveByPK($this->qfr_id, $con);
			   $obj->addSiteReportsQFRs($this);
			 */
		}
		return $this->aSiteReportsQFR;
	}

} // BaseSiteReportsQFRProject
