<?php

namespace CurrencyCloud\Model;

use DateTime;

class Payment implements EntityInterface
{

    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $shortReference;
    /**
     * @var string
     */
    private $beneficiaryId;
    /**
     * @var string
     */
    private $conversionId;
    /**
     * @var string
     */
    private $amount;
    /**
     * @var string
     */
    private $currency;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $paymentType;
    /**
     * @var string
     */
    private $reference;
    /**
     * @var string
     */
    private $reason;
    /**
     * @var DateTime
     */
    private $paymentDate;
    /**
     * @var DateTime
     */
    private $transferredAt;
    /**
     * @var string
     */
    private $authorisationStepsRequired;
    /**
     * @var string
     */
    private $creatorContactId;
    /**
     * @var string
     */
    private $lastUpdaterContactId;
    /**
     * @var string
     */
    private $failureReason;
    /**
     * @var string
     */
    private $payerDetailsSource;
    /**
     * @var string
     */
    private $payerId;
    /**
     * @var DateTime
     */
    private $createdAt;
    /**
     * @var DateTime
     */
    private $updatedAt;
    /**
     * @var String
     */
    private $uniqueRequestId;
    /**
     * @var string
     */
    private $failureReturnedAmount;
    /**
     * @var String
     */
    private $ultimateBeneficiaryName;
    /**
     * @var String
     */
    private $purposeCode;
    /**
     * @var String
     */
    private $chargeType;
    /**
     * @var String
     */
    private $feeAmount;
    /**
     * @var String
     */
    private $feeCurrency;

    /**
     * @return String
     */
    public function getUltimateBeneficiaryName(): string
    {
        return $this->ultimateBeneficiaryName;
    }

    /**
     * @param String $ultimateBeneficiaryName
     * @return Payment
     */
    public function setUltimateBeneficiaryName(string $ultimateBeneficiaryName): Payment
    {
        $this->ultimateBeneficiaryName = $ultimateBeneficiaryName;
        return $this;
    }

    /**
     * @return String
     */
    public function getPurposeCode(): string
    {
        return $this->purposeCode;
    }

    /**
     * @param String $purposeCode
     * @return Payment
     */
    public function setPurposeCode(string $purposeCode): Payment
    {
        $this->purposeCode = $purposeCode;
        return $this;
    }

    /**
     * @return String
     */
    public function getChargeType(): string
    {
        return $this->chargeType;
    }

    /**
     * @param String $chargeType
     * @return Payment
     */
    public function setChargeType(string $chargeType): Payment
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * @return String
     */
    public function getFeeAmount(): string
    {
        return $this->feeAmount;
    }

    /**
     * @param String $feeAmount
     * @return Payment
     */
    public function setFeeAmount(string $feeAmount): Payment
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * @return String
     */
    public function getFeeCurrency(): string
    {
        return $this->feeCurrency;
    }

    /**
     * @param String $feeCurrency
     * @return Payment
     */
    public function setFeeCurrency(string $feeCurrency): Payment
    {
        $this->feeCurrency = $feeCurrency;
        return $this;
    }
    
    /**
     * @param string $currency
     * @param string $beneficiaryId
     * @param string $amount
     * @param string $reason
     * @param string $reference
     *
     * @return $this
     */
    public static function create($currency, $beneficiaryId, $amount, $reason, $reference)
    {
        return (new Payment())
            ->setCurrency($currency)
            ->setBeneficiaryId($beneficiaryId)
            ->setAmount($amount)
            ->setReason($reason)
            ->setReference($reference);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getShortReference()
    {
        return $this->shortReference;
    }

    /**
     * @param string $shortReference
     *
     * @return $this
     */
    public function setShortReference($shortReference)
    {
        $this->shortReference = $shortReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getBeneficiaryId()
    {
        return $this->beneficiaryId;
    }

    /**
     * @param string $beneficiaryId
     *
     * @return $this
     */
    public function setBeneficiaryId($beneficiaryId)
    {
        $this->beneficiaryId = $beneficiaryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getConversionId()
    {
        return $this->conversionId;
    }

    /**
     * @param string $conversionId
     *
     * @return $this
     */
    public function setConversionId($conversionId)
    {
        $this->conversionId = $conversionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     *
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * @param DateTime $paymentDate
     *
     * @return $this
     */
    public function setPaymentDate(DateTime $paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getTransferredAt()
    {
        return $this->transferredAt;
    }

    /**
     * @param DateTime $transferredAt
     *
     * @return $this
     */
    public function setTransferredAt(DateTime $transferredAt)
    {
        $this->transferredAt = $transferredAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorisationStepsRequired()
    {
        return $this->authorisationStepsRequired;
    }

    /**
     * @param string $authorisationStepsRequired
     *
     * @return $this
     */
    public function setAuthorisationStepsRequired($authorisationStepsRequired)
    {
        $this->authorisationStepsRequired = $authorisationStepsRequired;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatorContactId()
    {
        return $this->creatorContactId;
    }

    /**
     * @param string $creatorContactId
     *
     * @return $this
     */
    public function setCreatorContactId($creatorContactId)
    {
        $this->creatorContactId = $creatorContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdaterContactId()
    {
        return $this->lastUpdaterContactId;
    }

    /**
     * @param string $lastUpdaterContactId
     *
     * @return $this
     */
    public function setLastUpdaterContactId($lastUpdaterContactId)
    {
        $this->lastUpdaterContactId = $lastUpdaterContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failureReason;
    }

    /**
     * @param string $failureReason
     *
     * @return $this
     */
    public function setFailureReason($failureReason)
    {
        $this->failureReason = $failureReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayerId()
    {
        return $this->payerId;
    }

    /**
     * @param string $payerId
     *
     * @return $this
     */
    public function setPayerId($payerId)
    {
        $this->payerId = $payerId;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return String
     */
    public function getUniqueRequestId()
    {
        return $this->uniqueRequestId;
    }

    /**
     * @param String $uniqueRequestId
     *
     * @return $this
     */
    public function setUniqueRequestId($uniqueRequestId)
    {
        $this->uniqueRequestId = $uniqueRequestId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayerDetailsSource()
    {
        return $this->payerDetailsSource;
    }

    /**
     * @param string $payerDetailsSource
     *
     * @return $this
     */
    public function setPayerDetailsSource($payerDetailsSource)
    {
        $this->payerDetailsSource = $payerDetailsSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailureReturnedAmount()
    {
        return $this->failureReturnedAmount;
    }

    /**
     * @param string $failureReturnedAmount
     *
     * @return $this
     */
    public function setFailureReturnedAmount($failureReturnedAmount)
    {
        $this->failureReturnedAmount = $failureReturnedAmount;
        return $this;
    }
}
