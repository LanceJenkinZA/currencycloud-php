<?php
namespace CurrencyCloud\Criteria;

class PaginationCriteria {
    /**
     * @var int|null
     */
    private $currentPage;
    
    /**
     * @var int|null
     */
    private $perPage;

    /**
     * @var string|null
     */
    private $order;

    /**
     * @var string|null
     */
    private $orderAscDesc;

    

    /**
     * Get the value of currentPage
     *
     * @return  int|null
     */ 
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * Set the value of currentPage
     *
     * @param  int|null  $currentPage
     *
     * @return  self
     */ 
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    /**
     * Get the value of perPage
     *
     * @return  int|null
     */ 
    public function getPerPage()
    {
        return $this->perPage;
    }

    /**
     * Set the value of perPage
     *
     * @param  int|null  $perPage
     *
     * @return  self
     */ 
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * Get the value of order
     *
     * @return  string|null
     */ 
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set the value of order
     *
     * @param  string|null  $order
     *
     * @return  self
     */ 
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get the value of orderAscDesc
     *
     * @return  string|null
     */ 
    public function getOrderAscDesc()
    {
        return $this->orderAscDesc;
    }

    /**
     * Set the value of orderAscDesc
     *
     * @param  string|null  $orderAscDesc
     *
     * @return  self
     */ 
    public function setOrderAscDesc($orderAscDesc)
    {
        $this->orderAscDesc = $orderAscDesc;

        return $this;
    }
}