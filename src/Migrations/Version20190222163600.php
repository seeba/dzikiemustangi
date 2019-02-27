<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190222163600 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE participant (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sport_competition_participant (sport_competition_id INT NOT NULL, participant_id INT NOT NULL, INDEX IDX_ADC5480FCD886C21 (sport_competition_id), INDEX IDX_ADC5480F9D1C3019 (participant_id), PRIMARY KEY(sport_competition_id, participant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_organizer (event_id INT NOT NULL, organizer_id INT NOT NULL, INDEX IDX_1F414F4E71F7E88B (event_id), INDEX IDX_1F414F4E876C4DDA (organizer_id), PRIMARY KEY(event_id, organizer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE club (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sport_competition_participant ADD CONSTRAINT FK_ADC5480FCD886C21 FOREIGN KEY (sport_competition_id) REFERENCES sport_competition (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sport_competition_participant ADD CONSTRAINT FK_ADC5480F9D1C3019 FOREIGN KEY (participant_id) REFERENCES participant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_organizer ADD CONSTRAINT FK_1F414F4E71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_organizer ADD CONSTRAINT FK_1F414F4E876C4DDA FOREIGN KEY (organizer_id) REFERENCES organizer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sport_competition ADD sport_competition_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sport_competition ADD CONSTRAINT FK_D63F68F7F6A4DBE FOREIGN KEY (sport_competition_type_id) REFERENCES sport_competition_type (id)');
        $this->addSql('CREATE INDEX IDX_D63F68F7F6A4DBE ON sport_competition (sport_competition_type_id)');
        $this->addSql('ALTER TABLE event ADD event_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7401B253C FOREIGN KEY (event_type_id) REFERENCES event_type (id)');
        $this->addSql('CREATE INDEX IDX_3BAE0AA7401B253C ON event (event_type_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sport_competition_participant DROP FOREIGN KEY FK_ADC5480F9D1C3019');
        $this->addSql('DROP TABLE participant');
        $this->addSql('DROP TABLE sport_competition_participant');
        $this->addSql('DROP TABLE event_organizer');
        $this->addSql('DROP TABLE club');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7401B253C');
        $this->addSql('DROP INDEX IDX_3BAE0AA7401B253C ON event');
        $this->addSql('ALTER TABLE event DROP event_type_id');
        $this->addSql('ALTER TABLE sport_competition DROP FOREIGN KEY FK_D63F68F7F6A4DBE');
        $this->addSql('DROP INDEX IDX_D63F68F7F6A4DBE ON sport_competition');
        $this->addSql('ALTER TABLE sport_competition DROP sport_competition_type_id');
    }
}
