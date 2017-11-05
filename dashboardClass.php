<?php
/**
 * Created by PhpStorm.
 * User: Nikola
 * Date: 05-Nov-17
 * Time: 10:00 PM
 */

class dashboardClass
{
	private $start;
	private $end;
	private $lastName;
	private $driver;
	private $memberCustomer;
	private $activity;
	private $type;
	private $paid;
	private $weight;
	private $age;
	private $shoeSize;
	private $status;

	/**
	 * dashboardClass constructor.
	 * @param $start
	 * @param $end
	 * @param $lastName
	 * @param $driver
	 * @param $memberCustomer
	 * @param $activity
	 * @param $type
	 * @param $paid
	 * @param $weight
	 * @param $age
	 * @param $shoeSize
	 * @param $status
	 */
	public function __construct($start, $end, $lastName, $driver, $memberCustomer, $activity, $type, $paid, $weight, $age, $shoeSize, $status)
	{
		$this->start = $start;
		$this->end = $end;
		$this->lastName = $lastName;
		$this->driver = $driver;
		$this->memberCustomer = $memberCustomer;
		$this->activity = $activity;
		$this->type = $type;
		$this->paid = $paid;
		$this->weight = $weight;
		$this->age = $age;
		$this->shoeSize = $shoeSize;
		$this->status = $status;
	}

	/**
	 * @return mixed
	 */
	public function getStart()
	{
		return $this->start;
	}

	/**
	 * @param mixed $start
	 */
	public function setStart($start)
	{
		$this->start = $start;
	}

	/**
	 * @return mixed
	 */
	public function getEnd()
	{
		return $this->end;
	}

	/**
	 * @param mixed $end
	 */
	public function setEnd($end)
	{
		$this->end = $end;
	}

	/**
	 * @return mixed
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * @param mixed $lastName
	 */
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	/**
	 * @return mixed
	 */
	public function getDriver()
	{
		return $this->driver;
	}

	/**
	 * @param mixed $driver
	 */
	public function setDriver($driver)
	{
		$this->driver = $driver;
	}

	/**
	 * @return mixed
	 */
	public function getMemberCustomer()
	{
		return $this->memberCustomer;
	}

	/**
	 * @param mixed $memberCustomer
	 */
	public function setMemberCustomer($memberCustomer)
	{
		$this->memberCustomer = $memberCustomer;
	}

	/**
	 * @return mixed
	 */
	public function getActivity()
	{
		return $this->activity;
	}

	/**
	 * @param mixed $activity
	 */
	public function setActivity($activity)
	{
		$this->activity = $activity;
	}

	/**
	 * @return mixed
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param mixed $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @return mixed
	 */
	public function getPaid()
	{
		return $this->paid;
	}

	/**
	 * @param mixed $paid
	 */
	public function setPaid($paid)
	{
		$this->paid = $paid;
	}

	/**
	 * @return mixed
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/**
	 * @param mixed $weight
	 */
	public function setWeight($weight)
	{
		$this->weight = $weight;
	}

	/**
	 * @return mixed
	 */
	public function getAge()
	{
		return $this->age;
	}

	/**
	 * @param mixed $age
	 */
	public function setAge($age)
	{
		$this->age = $age;
	}

	/**
	 * @return mixed
	 */
	public function getShoeSize()
	{
		return $this->shoeSize;
	}

	/**
	 * @param mixed $shoeSize
	 */
	public function setShoeSize($shoeSize)
	{
		$this->shoeSize = $shoeSize;
	}

	/**
	 * @return mixed
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * @param mixed $status
	 */
	public function setStatus($status)
	{
		$this->status = $status;
	}
}