<?php


namespace HelloJonzz\SyliusJobPlugin\Entity;


use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Channel\Model\ChannelInterface;
use Sylius\Component\Resource\Model\TranslatableTrait;

/**
 * Class Job
 * @package HelloJonzz\SyliusJobPlugin\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="hello_jonzz_sylius_job_plugin_job")
 *
 */
class Job implements JobInterface
{
    use ChannelsAwareTrait;
/*
    use TranslatableTrait {
        __construct as protected initializeTranslationsCollection;
    }
*/
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected ?int $id;

    /**
     * @var ?string
     *
     * @ORM\Column(type="string", length=64, unique=true)
     */
    protected ?string $code;

    /**
     * @var ?string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected ?string $title;

    /**
     * @var ?string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    protected ?string $description;

    /**
     * @var Collection|ChannelInterface[]
     *
     * @ORM\ManyToMany(targetEntity="Sylius\Component\Channel\Model\ChannelInterface")
     * @ORM\JoinTable(
     *     name="hello_jonzz_job_jobs_channels",
     *     joinColumns={@ORM\JoinColumn(name="job_id", referencedColumnName="id", onDelete="CASCADE")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="channel_id", referencedColumnName="id", onDelete="CASCADE")}
     * )
     */
    protected $channels;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function __construct()
    {
        // $this->initializeTranslationsCollection();
        $this->initializeChannelsCollection();
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
