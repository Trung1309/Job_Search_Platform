SET GLOBAL event_scheduler = ON;

-- Mỗi phút update 1 lần --
DELIMITER //

CREATE EVENT IF NOT EXISTS update_job_status
ON SCHEDULE EVERY 1 MINUTE
DO
BEGIN
    UPDATE jobs
    SET trang_thai = 'Hết hạn'
    WHERE ngay_het_han < CURDATE() AND trang_thai = 'Đang hoạt động';
END //

DELIMITER ;


-- Mỗi phút update 1 lần v2--
DELIMITER //

CREATE EVENT update_job_status1
ON SCHEDULE EVERY 1 MINUTE
STARTS CURRENT_TIMESTAMP
DO
BEGIN
    DECLARE today DATE;
    DECLARE job_id INT;

    SET today = CURDATE();

    -- Lặp qua từng công việc
    DECLARE cur CURSOR FOR
        SELECT id_cong_viec
        FROM jobs;

    OPEN cur;

    read_loop: LOOP
        FETCH cur INTO job_id;
        IF done THEN
            LEAVE read_loop;
        END IF;

        -- Cập nhật trạng thái cho từng công việc
        UPDATE jobs
        SET trang_thai = CASE
                            WHEN ngay_het_han < today THEN 'Hết hạn'
                            ELSE 'Hoạt động'
                          END
        WHERE id_cong_viec = job_id;
    END LOOP;

    CLOSE cur;
END //

DELIMITER ;



SET GLOBAL event_scheduler = ON;

-- Mỗi phút update 1 lần --
DELIMITER //

CREATE EVENT IF NOT EXISTS update_job_status
ON SCHEDULE EVERY 1 SECOND
DO
BEGIN
    UPDATE jobs
    SET trang_thai = 'Đủ số lượng'
    WHERE so_luong = 0;
END //

DELIMITER ;


